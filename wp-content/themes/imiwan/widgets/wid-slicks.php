<?php
add_action('widgets_init', 'yusi_slicks');
function yusi_slicks() {
    register_widget('yusi_slick');
}
class yusi_slick extends WP_Widget {
    function yusi_slick() {
        $widget_ops = array(
            'classname' => 'yusi_slick',
            'description' => '带箭头的小幻灯片'
        );
        $this->WP_Widget('yusi_slick', 'Yusi-幻灯片', $widget_ops);
    }
    function widget($args, $instance) {
        extract($args);
        $simg1 = $instance['simg1'];
        $slink1 = $instance['slink1'];
        $stitle1 = $instance['stitle1'];
        $simg2 = $instance['simg2'];
        $slink2 = $instance['slink2'];
        $stitle2 = $instance['stitle2'];
        $simg3 = $instance['simg3'];
        $slink3 = $instance['slink3'];
        $stitle3 = $instance['stitle3'];
        $simg4 = $instance['simg4'];
        $slink4 = $instance['slink4'];
        $stitle4 = $instance['stitle4'];
        echo $before_widget;
        echo '<div id="wowslider-container1"><div class="ws_images"><ul>';
        echo '<li><a target="_blank" href="' . $slink1 . '" title="' . $stitle1 . '" ><img width="360px" height="200px" src="' . $simg1 . '" ></a></li>';
        echo '<li><a target="_blank" href="' . $slink2 . '" title="' . $stitle2 . '" ><img width="360px" height="200px" src="' . $simg2 . '" ></a></li>';
        echo '<li><a target="_blank" href="' . $slink3 . '" title="' . $stitle3 . '" ><img width="360px" height="200px" src="' . $simg3 . '" ></a></li>';
        echo '<li><a target="_blank" href="' . $slink4 . '" title="' . $stitle4 . '" ><img width="360px" height="200px" src="' . $simg4 . '" ></a></li>';
        echo '</ul></div></div>';
        echo $after_widget;
    }
    function form($instance) {
?>
		<p>
			<label>
				幻灯一图片：<span class="yusi_tip">360×200</span>
				<input id="<?php
        echo $this->get_field_id('simg1'); ?>" name="<?php
        echo $this->get_field_name('simg1'); ?>" type="text" value="<?php
        echo $instance['simg1']; ?>" class="widefat" />
			</label>
		</p>
		<p>
			<label>
				幻灯一链接：
				<input style="width:100%;" id="<?php
        echo $this->get_field_id('slink1'); ?>" name="<?php
        echo $this->get_field_name('slink1'); ?>" type="url" value="<?php
        echo $instance['slink1']; ?>" size="24" />
			</label>
		</p>
		<p>
			<label>
				幻灯一标题：
				<input id="<?php
        echo $this->get_field_id('stitle1'); ?>" name="<?php
        echo $this->get_field_name('stitle1'); ?>" type="text" value="<?php
        echo $instance['stitle1']; ?>" class="widefat" />
			</label>
		</p><hr />
		<p>
			<label>
				幻灯二图片：<span class="yusi_tip">360×200</span>
				<input id="<?php
        echo $this->get_field_id('simg2'); ?>" name="<?php
        echo $this->get_field_name('simg2'); ?>" type="text" value="<?php
        echo $instance['simg2']; ?>" class="widefat" />
			</label>
		</p>
		<p>
			<label>
				幻灯二链接：
				<input style="width:100%;" id="<?php
        echo $this->get_field_id('slink2'); ?>" name="<?php
        echo $this->get_field_name('slink2'); ?>" type="url" value="<?php
        echo $instance['slink2']; ?>" size="24" />
			</label>
		</p>
				<p>
			<label>
				幻灯二标题：
				<input id="<?php
        echo $this->get_field_id('stitle2'); ?>" name="<?php
        echo $this->get_field_name('stitle2'); ?>" type="text" value="<?php
        echo $instance['stitle2']; ?>" class="widefat" />
			</label>
		</p><hr />
		<p>
			<label>
				幻灯三图片：<span class="yusi_tip">360×200</span>
				<input id="<?php
        echo $this->get_field_id('simg3'); ?>" name="<?php
        echo $this->get_field_name('simg3'); ?>" type="text" value="<?php
        echo $instance['simg3']; ?>" class="widefat" />
			</label>
		</p>
		<p>
			<label>
				幻灯三链接：
				<input style="width:100%;" id="<?php
        echo $this->get_field_id('slink3'); ?>" name="<?php
        echo $this->get_field_name('slink3'); ?>" type="url" value="<?php
        echo $instance['slink3']; ?>" size="24" />
			</label>
		</p>
				<p>
			<label>
				幻灯三标题：
				<input id="<?php
        echo $this->get_field_id('stitle3'); ?>" name="<?php
        echo $this->get_field_name('stitle3'); ?>" type="text" value="<?php
        echo $instance['stitle3']; ?>" class="widefat" />
			</label>
		</p><hr />
		<p>
			<label>
				幻灯四图片：<span class="yusi_tip">360×200</span>
				<input id="<?php
        echo $this->get_field_id('simg4'); ?>" name="<?php
        echo $this->get_field_name('simg4'); ?>" type="text" value="<?php
        echo $instance['simg4']; ?>" class="widefat" />
			</label>
		</p>
		<p>
			<label>
				幻灯四链接：
				<input style="width:100%;" id="<?php
        echo $this->get_field_id('slink4'); ?>" name="<?php
        echo $this->get_field_name('slink4'); ?>" type="url" value="<?php
        echo $instance['slink4']; ?>" size="24" />
			</label>
		</p>
				<p>
			<label>
				幻灯四标题：
				<input id="<?php
        echo $this->get_field_id('stitle4'); ?>" name="<?php
        echo $this->get_field_name('stitle4'); ?>" type="text" value="<?php
        echo $instance['stitle4']; ?>" class="widefat" />
			</label>
		</p><hr />
<?php
    }
}

?>