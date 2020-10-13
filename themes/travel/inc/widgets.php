<?php 

/**
 * Adds Upcoming_Tours widget.
 */
class Upcoming_Tours extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Upcoming_Tours', // Base ID
			esc_html__( 'Upcoming Tours', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Show 2 Upcoming Tours', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		$query=array(
            'post_type'=>'travel-menu',
            'posts_per_page'=>2,
            'order'=>'rand'
        ); ?>

        <ul class="tours list-order">
            <?php 
              $tours=new WP_Query( $query );
              while($tours->have_posts()):$tours->the_post();
            ?>
            <li class="clear">
                <div class="feature-tour">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>

                <div class="content-tour">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                </div>
            </li>

           <?php endwhile;wp_reset_postdata(); ?>
        </ul>

        <?php 
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Upcoming_Tourss




class Blog_Entries extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Blog_Entries', // Base ID
			esc_html__( 'Blog Entries', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Show 2 Blog Entries', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		$query=array(
            'post_type'=>'post',
            'posts_per_page'=>2,
            'order'=>'rand'
        ); ?>

        <ul class="tours list-order">
            <?php 
              $posts=new WP_Query( $query );
              while($posts->have_posts()):$posts->the_post();
            ?>
            <li class="clear">
                <div class="feature-tour">
                    <?php the_post_thumbnail('thumbnail'); ?>
                </div>

                <div class="content-tour">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                </div>
            </li>

           <?php endwhile;wp_reset_postdata(); ?>
        </ul>

        <?php 
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Blog_Entries
?>