<?php

/*
 * Plugin Name: Divi Extended Column Layouts
 * Plugin URI:  http://www.sean-barton.co.uk
 * Description: A plugin to add a additional column layouts to the divi builder
 * Author:      Sean Barton - Tortoise IT
 * Version:     1.6
 * Author URI:  http://www.sean-barton.co.uk
 */

    add_action('plugins_loaded', 'sb_dcl_init');
    
    function sb_dcl_init() {
	add_action('wp_enqueue_scripts', 'sb_dcl_enqueue', 9999);
	add_action('admin_enqueue_scripts', 'sb_dcl_enqueue_admin', 9999);
	
	add_filter('et_builder_layout_columns', 'sb_dcl_col_templates');
    }
    
    function sb_dcl_enqueue_admin() {
	wp_enqueue_style('sb_dcl_admin_css', plugins_url( '/admin.css', __FILE__ ));
    }
    
    function sb_dcl_enqueue() {
	wp_enqueue_style('sb_dcl_custom_css', plugins_url( '/style.css', __FILE__ ));
    }
    
    function sb_dcl_col_templates($layouts) {
	
	$new_layouts = '<li data-layout="2_5,3_5">
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_3_5"></div>
			</li>
			<li data-layout="3_5,2_5">
			    <div class="et_pb_layout_column et_pb_column_layout_3_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			</li>
			<li data-layout="4_5,1_5">
			    <div class="et_pb_layout_column et_pb_column_layout_4_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			</li>
			<li data-layout="1_5,4_5">
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_4_5"></div>
			</li>
			<li data-layout="1_5,1_5,1_5,1_5,1_5">
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			</li>
			<li data-layout="1_5,1_5,1_5,2_5">
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			</li>
			<li data-layout="2_5,1_5,1_5,1_5">
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			</li>
			<li data-layout="2_5,2_5,1_5">
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			</li>
			<li data-layout="1_5,2_5,2_5">
			    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_5"></div>
			</li>
			<li data-layout="1_6,1_6,1_6,1_2">
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_2"></div>
			</li>
			<li data-layout="1_2,1_6,1_6,1_6">
			    <div class="et_pb_layout_column et_pb_column_layout_1_2"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			</li>
			<li data-layout="1_6,2_3,1_6">
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_3"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			</li>
			<li data-layout="1_6,1_6,2_3">
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_2_3"></div>
			</li>
			<li data-layout="2_3,1_6,1_6">
			    <div class="et_pb_layout_column et_pb_column_layout_2_3"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			</li>
			<li data-layout="1_3,1_6,1_3,1_6">
			    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			</li>
			<li data-layout="1_6,1_3,1_6,1_3">
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
			</li>
			<li data-layout="5_6,1_6">
			    <div class="et_pb_layout_column et_pb_column_layout_5_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			</li>
			
			<li data-layout="1_6,5_6">
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_5_6"></div>
			</li>
			<li data-layout="1_6,1_6,1_6,1_6,1_6,1_6">
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_6"></div>
			</li>
			<li data-layout="1_7,1_7,1_7,1_7,1_7,1_7,1_7">
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_7"></div>
			</li>
			<li data-layout="1_8,1_8,1_8,1_8,1_8,1_8,1_8,1_8">
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			    <div class="et_pb_layout_column et_pb_column_layout_1_8"></div>
			</li>
	<%
		}
	%>';
	
	$layouts_orig = $layouts;
	$pos = strpos($layouts_orig, "}\n\t%>");
	$layouts = substr($layouts_orig, 0, ($pos-5)) . $new_layouts; //i know there is a better way to do this!
	
	$new_spec_layouts = '<li data-layout="1_6,5_6" data-specialty="0,1" data-specialty_columns="5">
				<div class="et_pb_layout_column et_pb_column_layout_1_6 et_pb_specialty_column"></div>
				<div class="et_pb_layout_column et_pb_column_layout_5_6 et_pb_variations et_pb_5_variations">
					<div class="et_pb_variation et_pb_variation_full"></div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_2"></div>
						<div class="et_pb_variation et_pb_variation_1_2"></div>
					</div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_3"></div>
						<div class="et_pb_variation et_pb_variation_1_3"></div>
						<div class="et_pb_variation et_pb_variation_1_3"></div>
					</div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_4"></div>
						<div class="et_pb_variation et_pb_variation_1_4"></div>
						<div class="et_pb_variation et_pb_variation_1_4"></div>
						<div class="et_pb_variation et_pb_variation_1_4"></div>
					</div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
					</div>
				</div>
			    </li>
			    <li data-layout="5_6,1_6" data-specialty="1,0" data-specialty_columns="5">
				<div class="et_pb_layout_column et_pb_column_layout_5_6 et_pb_variations et_pb_5_variations">
					<div class="et_pb_variation et_pb_variation_full"></div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_2"></div>
						<div class="et_pb_variation et_pb_variation_1_2"></div>
					</div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_3"></div>
						<div class="et_pb_variation et_pb_variation_1_3"></div>
						<div class="et_pb_variation et_pb_variation_1_3"></div>
					</div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_4"></div>
						<div class="et_pb_variation et_pb_variation_1_4"></div>
						<div class="et_pb_variation et_pb_variation_1_4"></div>
						<div class="et_pb_variation et_pb_variation_1_4"></div>
					</div>
					<div class="et_pb_variation_row">
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
						<div class="et_pb_variation et_pb_variation_1_5"></div>
					</div>
				</div>
				<div class="et_pb_layout_column et_pb_column_layout_1_6 et_pb_specialty_column"></div>
			    </li>' . "\n";
			    
	//$pos = strpos($layouts, "<% } else if ( typeof view !== \'undefined\' && typeof view.model.attributes.specialty_columns !== \'undefined\' ) { %>");
	//$layouts = substr_replace($layouts, $new_spec_layouts, $pos, 0);
	
	$pos = strpos($layouts, "<% } else if (");
	$append = substr($layouts, $pos);
	$layouts = substr($layouts, 0, $pos) . $new_spec_layouts . $append; //i know there is a better way to do this!
	
	$new_spec_content_layouts = '<% if ( view.model.attributes.specialty_columns > 3 ) { %>
					    <li data-layout="1_3,1_3,1_3">
						    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_3"></div>
					    </li>
				    <% } %>
			
				    <% if ( view.model.attributes.specialty_columns >= 4 ) { %>
					    <li data-layout="1_4,1_4,1_4,1_4">
						    <div class="et_pb_layout_column et_pb_column_layout_1_4"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_4"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_4"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_4"></div>
					    </li>
				    <% } %>
				    
				    <% if ( view.model.attributes.specialty_columns >= 5 ) { %>
					    <li data-layout="1_5,1_5,1_5,1_5,1_5">
						    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
						    <div class="et_pb_layout_column et_pb_column_layout_1_5"></div>
					    </li>
				    <% } %>
				    
				    ' . "\n";
	
	//$pos = strpos($layouts, "<% } else { %>");
	//$layouts = substr_replace($layouts, $new_spec_content_layouts, $pos, 0);
	
	$pos = strpos($layouts, "<% } else { %>");
	$append = substr($layouts, $pos);
	$layouts = substr($layouts, 0, $pos) . $new_spec_content_layouts . $append; //i know there is a better way to do this!
	
	return $layouts;
    }
    
?>