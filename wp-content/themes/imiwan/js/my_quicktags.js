QTags.addButton( 'hr', 'hr', "\n<hr />\n", '' );//添加横线
QTags.addButton( 'h2', 'h2', "\n<h2>", "</h2>\n" ); //添加标题2
QTags.addButton( 'h3', 'h3', "\n<h3>", "</h3>\n" ); //添加标题3
QTags.addButton( 'pre', 'pre', '\n<pre class="prettyprint linenums" >\n\n</pre>', "" );//添加高亮代码
QTags.addButton( 'video', '视频按钮', "\n[video]", "[/video]\n" );
QTags.addButton( 'dm', '链接按钮', "\n[dm href='']", "[/dm]\n" );
QTags.addButton( 'dl', '下载按钮', "\n[dl href='']", "[/dl]\n" );
QTags.addButton( 'member', '注册可见', "\n[member]", "[/member]\n" );
QTags.addButton( 'youku', '优酷视频', "\n[youku]", "[/youku]\n" );
QTags.addButton( 'go', '页面跳转', "\n[go]", "[/go]\n" );
//这儿共有四对引号，分别是按钮的ID、显示名、点一下输入内容、再点一下关闭内容（此为空则一次输入全部内容），\n表示换行。