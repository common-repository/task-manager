<?php
/**
 * La vue d'édition des commentaires dans le frontend
 *
 * @author Eoxia <dev@eoxia.com>
 * @since 1.0.0
 * @version 1.6.0
 * @copyright 2015-2018 Eoxia
 * @package Task_Manager
 */

namespace task_manager;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<li class="comment <?php echo ! empty( $comment->data['id'] ) ? 'edit' : 'new'; ?>">
	<input type="hidden" name="comment_id" value="<?php echo esc_attr( $comment->data['id'] ); ?>" />
	<input type="hidden" name="post_id" value="<?php echo esc_attr( $task_id ); ?>" />
	<input type="hidden" name="parent_id" value="<?php echo esc_attr( $point_id ); ?>" />
	<input type="hidden" name="frontend" value="true" />

	<?php echo do_shortcode( '[task_avatar ids="' . $comment->data['author_id'] . '" size="40"]' ); ?>

	<div class="comment-container">
		<div class="comment-content">

			<div class="comment-content-text">
				<input type="hidden" name="content" value="<?php echo esc_attr( trim( $comment->data['content'] ) ); ?>" />
				<div contenteditable="true" class="content"><?php echo trim( $comment->data['content'] ); ?></div>
				<?php if ( empty( $comment->data['id'] ) ) : ?>
					<span class="placeholder"><i class="fas fa-plus"></i> <?php esc_html_e( 'Your comment here...', 'task-manager' ); ?></span>
				<?php endif; ?>
			</div>

		</div><!-- .comment-content -->
		<div class="comment-action">
			<div class="fa-layers fa-fw save-icon action-input"
				data-parent="comment"
				data-action="edit_comment">

				<i class="fas fa-circle"></i>
				<i class="fa-inverse fas fa-save" data-fa-transform="shrink-6"></i>
			</div>
		</div>
	</div>
</li>
