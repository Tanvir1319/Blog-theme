<?php





function b1_setup(){
    load_theme_textdomain( 'b1', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails',array('post') );
}

add_action('after_setup_theme','b1_setup');


//** Menu Function */

function b1_menu() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
       
      )
    );
  }
  add_action( 'init', 'b1_menu' );



function b1_assets() {

    //** Enqueue Style  */
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'owl-css', get_template_directory_uri() . '/css/owl.css');
    wp_enqueue_style( 'style-css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style( 'favi-icon', get_template_directory_uri() . '/images/favicon.ico');


    //** Enqueue Script  */
    wp_enqueue_script( 'jquery-2.1', get_template_directory_uri() . '/js/jquery-2.1.4.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'bootstap-mi-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'script-js', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );





}
add_action( 'wp_enqueue_scripts', 'b1_assets' );


//** Registering Sidebar */

function b1_author_sidebar() {
 
  register_sidebar( array(
      'name' => __( 'Author Sidebar', 'b1' ),
      'id' => 'author_sidebar_1',
      'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'b1' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<div class="sidebar-title">',
      'after_title' => '</div>',
  ) );

 
  }

add_action( 'widgets_init', 'b1_author_sidebar' );



//** Author Widget */


class Author_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Author-Widget',  // Base ID
			__('Author Widget')   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Author_Widget' );
		});
	}

	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="sidebar-title">',
		'after_widget'  => '</div></div>',
	);

	public function widget( $args, $instance ) {


		$widget_id='widget_'.$args['widget_id'];
		$author_img=get_field('image',$widget_id);
		$author_name=get_field('author_name',$widget_id);
		$author_des=get_field('author_description',$widget_id);
		$author_socials=get_field('author_socials',$widget_id);
		









		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		echo '<div class="textwidget">';
		echo esc_html__( $instance['text'], 'b1' );
		echo '</div>';





?>




		<div class="sidebar-about centred">
		
		<figure class="img-box"><img src="<?php echo $author_img['url']; ?>" alt=""></figure>
		<h5 class="name"><?php echo $author_name; ?></h5>
		<div class="text"><?php echo $author_des; ?></div>
		<ul class="social-link">


<?php
foreach($author_socials as $author_social){
?>
				

				<li>
                            <a href="<?php echo $author_social['icon_url'];?>"><i class="<?php echo $author_social['icon_name'];?>"></i></a> 
                        </li>   
			<?php } ?>
		</ul>
	</div>






	

<?php 
		echo $args['after_widget']; }
	

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'b1' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'b1' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$author_widget = new Author_Widget();





//** Latest Post Widget */
class Latest_post_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'Latest_post_Widget',  // Base ID
			'Latest Post'   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Latest_post_Widget' );
		});
	}

	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="sidebar-title">',
		'after_widget'  => '</div>',
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		echo '<div class="textwidget">';
		echo esc_html__( $instance['text'], 'b1' );
		echo '</div>';




		

?>

		<div class="sidebar-post">
		

		<?php
$widget_id='widget_'.$args['widget_id'];
$show_count= get_field('show_count','$widget_id');
$post_order= get_field('post_order','$widget_id');
$show_date= get_field('show_date','$widget_id');




$args = array( 
	'post_type' => 'post',
	 'posts_per_page' => $show_count,
	 'order' => $post_order
	
	);
$the_query = new WP_Query( $args ); 
?>
<?php  
 while ( $the_query->have_posts() ) { $the_query->the_post(); ?>



		
		<div class="single-post">
			<div class="img-box"><a href="<?php the_permalink(); ?>"><figure><img src="<?php the_post_thumbnail_url(); ?>" alt=""></figure></a></div>
			<h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
			<?php if($show_date==true){ ?>
			<div class="text"><?php the_date(); ?></div>
			<?php } ?>
		</div>

		<?php } ?>




		





<?php



		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'b1' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'b1' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$latest_post_widget = new Latest_post_Widget();






//** Newsletter Widget */


class Newsletter_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'newsletter-widget',  // Base ID
			'Newsletter Widget'   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Newsletter_Widget' );
		});
	}

	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="">',
		'after_widget'  => '</div>',
	);

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		 
		
?>




		<div class="sidebar-newsletter centred">
		<div class="title"><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;<?php echo $instance['title']; ?></div>
                            
		
		<?php echo do_shortcode('[contact-form-7 id="61" title="NewsLetter"]'); ?>
	</div>



<?php








		echo $args['after_widget'];
	}

	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'b1' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'b1' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$my_newsletter = new Newsletter_Widget();





//** Categories Widget */






class Category_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'category-widget',  // Base ID
			'Category Widget'   // Name
		);
		add_action( 'widgets_init', function() {
			register_widget( 'Category_Widget' );
		});
	}

	public $args = array(
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>',
		'before_widget' => '<div class="sidebar-title">',
		'after_widget'  => '</div>',
	);

	public function widget( $args, $instance ) {
		echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
?>

<div class="sidebar-categories"> <?php echo $instance['title'];  ?>
<ul class="categories-list"> 
<?php
$cats=get_categories();
foreach($cats as $cat){
?>

<li><a href="<?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?><span>(<?php echo $cat->category_count; ?>)</span></a></li>

<?php } ?></ul>
                        </div>


                           
                                
                            

<?php








		echo $args['after_widget'];
	}

	function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'b1' );
		
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php echo esc_html__( 'Title:', 'b1' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		
		<?php
	}

	function update( $new_instance, $old_instance ) {
		$instance          = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		return $instance;
	}
}
$category = new Category_Widget();









if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'b1 Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    
    acf_add_options_sub_page(array(
        'page_title'    => 'b1 Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
    
}

	


// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );