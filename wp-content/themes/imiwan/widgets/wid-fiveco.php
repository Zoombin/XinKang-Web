<?php
//彩色推荐模块
add_action('widgets_init', 'git_recs');
function git_recs() {
    register_widget('git_rec');
}
class git_rec extends WP_Widget {
    function git_rec() {
        $widget_ops = array(
            'classname' => 'git_rec',
            'description' => '五个推荐块'
        );
        $this->WP_Widget('git_rec', 'Yusi-推荐模块', $widget_ops);
    }
    function widget($args, $instance) {
        extract($args);
        $atitle1 = $instance['atitle1'];
        $alink1 = $instance['alink1'];
        $atitle2 = $instance['atitle2'];
        $alink2 = $instance['alink2'];
        $atitle3 = $instance['atitle3'];
        $alink3 = $instance['alink3'];
        $atitle4 = $instance['atitle4'];
        $alink4 = $instance['alink4'];
        $atitle5 = $instance['atitle5'];
        $alink5 = $instance['alink5'];
        echo $before_widget;
        echo '<a target="_blank" class="aclass01" href="' . $alink1 . '" title="' . $atitle1 . '" >' . $atitle1 . '</a>';
        echo '<a target="_blank" class="aclass01" href="' . $alink2 . '" title="' . $atitle2 . '" >' . $atitle2 . '</a>';
        echo '<a target="_blank" class="aclass01" href="' . $alink3 . '" title="' . $atitle3 . '" >' . $atitle3 . '</a>';
        echo '<a target="_blank" class="aclass01" href="' . $alink4 . '" title="' . $atitle4 . '" >' . $atitle4 . '</a>';
        echo '<a target="_blank" class="aclass01" href="' . $alink5 . '" title="' . $atitle5 . '" >' . $atitle5 . '</a>';
        echo $after_widget;
    }
    function form($instance) {
?>
		<p>
			<label>
				第一文字：<input style="width:200px;" id="<?php
        echo $this->get_field_id('atitle1'); ?>" name="<?php
        echo $this->get_field_name('atitle1'); ?>" type="text" value="<?php
        echo $instance['atitle1']; ?>" />
			</label>
		</p>
		<p>
			<label>
				第一链接：<input style="width:200px;" id="<?php
        echo $this->get_field_id('alink1'); ?>" name="<?php
        echo $this->get_field_name('alink1'); ?>" type="url" value="<?php
        echo $instance['alink1']; ?>" />
			</label>
		</p>
		<hr />

		<p>
			<label>
				第二文字：<input style="width:200px;" id="<?php
        echo $this->get_field_id('atitle2'); ?>" name="<?php
        echo $this->get_field_name('atitle2'); ?>" type="text" value="<?php
        echo $instance['atitle2']; ?>" />
			</label>
		</p>
		<p>
			<label>
				第二链接：<input style="width:200px;" id="<?php
        echo $this->get_field_id('alink2'); ?>" name="<?php
        echo $this->get_field_name('alink2'); ?>" type="url" value="<?php
        echo $instance['alink2']; ?>" />
			</label>
		</p>
		<hr />

		<p>
			<label>
				第三文字：<input style="width:200px;" id="<?php
        echo $this->get_field_id('atitle3'); ?>" name="<?php
        echo $this->get_field_name('atitle3'); ?>" type="text" value="<?php
        echo $instance['atitle3']; ?>" />
			</label>
		</p>
		<p>
			<label>
				第三链接：<input style="width:200px;" id="<?php
        echo $this->get_field_id('alink3'); ?>" name="<?php
        echo $this->get_field_name('alink3'); ?>" type="url" value="<?php
        echo $instance['alink3']; ?>" />
			</label>
		</p>
		<hr />

		<p>
			<label>
				第四文字：<input style="width:200px;" id="<?php
        echo $this->get_field_id('atitle4'); ?>" name="<?php
        echo $this->get_field_name('atitle4'); ?>" type="text" value="<?php
        echo $instance['atitle4']; ?>" />
			</label>
		</p>
		<p>
			<label>
				第四链接：<input style="width:200px;" id="<?php
        echo $this->get_field_id('alink4'); ?>" name="<?php
        echo $this->get_field_name('alink4'); ?>" type="url" value="<?php
        echo $instance['alink4']; ?>" />
			</label>
		</p>
		<hr />

		<p>
			<label>
				第五文字：<input style="width:200px;" id="<?php
        echo $this->get_field_id('atitle5'); ?>" name="<?php
        echo $this->get_field_name('atitle5'); ?>" type="text" value="<?php
        echo $instance['atitle5']; ?>" />
			</label>
		</p>
		<p>
			<label>
				第五链接：<input style="width:200px;" id="<?php
        echo $this->get_field_id('alink5'); ?>" name="<?php
        echo $this->get_field_name('alink5'); ?>" type="url" value="<?php
        echo $instance['alink5']; ?>" />
			</label>
		</p>
		<hr />
<?php
    }
}
?>