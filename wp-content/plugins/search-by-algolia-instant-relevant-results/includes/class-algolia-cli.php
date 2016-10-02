<?php

/**
 * Process Algolia Task Queue.
 */
class Algolia_CLI extends \WP_CLI_Command {

	/**
	 * @var Algolia_Plugin
	 */
	private $plugin;

	public function __construct() {
		$this->plugin = \Algolia_Plugin::get_instance();
	}

	/**
	 * Process Algolia queue.
	 * 
	 * ## EXAMPLES
	 *
	 *     wp algolia process-queue
	 *
	 * @alias process-queue
	 */
	public function process_queue() {
		$queue = $this->plugin->get_task_queue();
		$dispatcher = $this->plugin->get_task_dispatcher();

		$count = $queue->get_queued_tasks_count();

		if ( 0 === $count ) {
			\WP_CLI::success( 'No tasks to process.');
			
			return;
		}

		if ( $queue->is_running() ) {
			\WP_CLI::error( 'Queue is already running.');

			return;
		}

		// Make sure we do not trigger http loopback.
		remove_all_filters( 'algolia_process_queue' );

		\WP_CLI::success( "About to process a total of $count task(s)." );

		$notify = \WP_CLI\Utils\make_progress_bar( "Processing $count task(s)", $count );
		
		do {
			$success = $queue->run( $dispatcher );

			if ( false === $success ) {
				$notify->finish();
				\WP_CLI::error( "The queue processing was aborted.");

				return;
			}

			$newCount = $queue->get_queued_tasks_count();

			// One task can have many sub-tasks. Here we only need to tick on main tasks.
			if ( $newCount < $count ) {
				$notify->tick();
			}
			
			$count = $newCount;
		} while ( $count > 0 );

		$notify->finish();

		\WP_CLI::success( "All Done.");
	}

	/**
	 * Re-index all indices.
	 *
	 * ## EXAMPLES
	 *
	 *     wp algolia re-index-all
	 *
	 * @alias re-index-all
	 */
	public function re_index_all() {
		$ids = $this->plugin->get_settings()->get_synced_indices_ids();
		$queue = $this->plugin->get_task_queue();
		foreach ( $ids as $id ) {
			$queue->queue( 're_index_items', array( 'index_id' => $id ) );
			\WP_CLI::success( "Queued [$id] for indexing.");
		}
	}
}
