<?php

return [
    'plugin' => [
        'name' => '新闻 & 新闻邮件',
        'description' => '简单的新闻和新闻邮件插件。',
        'author' => 'Gergő Szabó'
    ],
    'menu' => [
        'news' => '新闻',
        'posts' => '文章',
        'categories' => '分类',
        'subscribers' => '订阅者',
        'statistics' => '统计',
        'import' => '导入',
        'export' => '导出',
        'logs' => '日志',
        'settings' => '设置'
    ],
    'title' => [
        'posts' => '文章',
        'categories' => '分类',
        'subscribers' => '订阅者'
    ],
    'new' => [
        'posts' => '新建文章',
        'categories' => '新建分类',
        'subscribers' => '新建订阅者'
    ],
    'stat' => [
        'posts' => '文章',
        'view' => '访问',
        'mail' => '发送量',
        'loss' => '损失',
        'basic' => '基础',
        'emails' => '邮件',
        'top' => 'TOP',
        'longest' => '内容最多',
        'shortest' => '内容最少',
        'queued' => '队列中',
        'send' => '发送',
        'sent' => '已发送',
        'viewed' => '已访问',
        'click' => '点击量',
        'clicked' => '已点击',
        'failed' => '失败',
        'log' => [
            'events' => '事件',
            'summary' => '摘要'
        ]
    ],
    'form' => [
        // General
        'id' => 'ID',
        'created_at' => '创建时间',
        'updated_at' => '更新时间',
        // Posts
        'title' => '标题',
        'slug' => 'Slug',
        'introductory' => '介绍',
        'content' => '内容',
        'image' => '图片',
        'category' => '分类',
        'tags' => '标签',
        'author' => '作者',
        'select_user' => '-- 选择用户 --',
        'status' => '状态',
        'status_published' => '已发布',
        'status_hide' => '屏蔽',
        'status_draft' => '草稿',
        'status_active' => '有效',
        'status_inactive' => '无效',
        'status_unsubscribed' => '未订阅',
        'status_pending' => '待处理',
        'featured' => '推荐',
        'hidden' => '屏蔽',
        'yes' => '是',
        'no' => '否',
        'view' => '访问',
        'published_at' => '发布时间',
        'last_send_at' => '最后发送邮件时间',
        'last_send' => '最后发送',
        'length' => '长度',
        'clone_of' => '克隆自',
        'news_cloning' => '克隆新闻 :name',
        'newsletter_content_tab' => '新闻邮件内容',
        'newsletter_content' => '新闻邮件内容',
        'enable_newsletter_content' => '开启新闻邮件内容',
        'enable_newsletter_content_description' => '启用此选项后，电子邮件的内容将被替换为此文本区域。否则，新闻的内容将被采用。',
        'seo_tab' => 'SEO 设置',
        'seo_title' => '标题',
        'seo_keywords' => '关键词',
        'seo_desc' => '描述',
        'seo_image' => 'OG 图片',
        // Subscribers
        'name' => '名称',
        'email' => '邮箱',
        'comment' => '评论',
        'locale' => '区域',
        'locale_comment' => '<a href="https://en.wikipedia.org/wiki/ISO_3166-1" target="_blank">查看国家编码</a>',
        'lang' => 'zh-cn',
        'mail' => '邮件',
        'registered_at' => '注册日期',
        'confirmed_at' => '确认日期',
        'unsubscribed_at' => '取消订阅日期',
        'ip_address' => 'IP 地址',
        'no_data' => '没有数据',
        // Logs
        'news' => '文章',
        'subscriber_name' => '订阅者名称',
        'subscriber_email' => '订阅者邮箱',
        'queued_at' => '队列中',
        'send_at' => '已发送',
        'viewed_at' => '已访问',
        'clicked_at' => '已点击',
        'logs_count' => '日志记录'
    ],
    'button' => [
        'activate' => '激活',
        'deactivate' => '关闭',
        'active' => '有效',
        'inactive' => '无效',
        'reorder' => '重新排序',
        'import' => '导入',
        'export' => '导出',
        'unsubscribe' => '取消订阅',
        'subscribe' => '订阅',
        'copy_content_to_newsletter' => '将内容复制到新闻稿内容',
        'test' => '发送测试邮件',
        'send' => '发送新闻邮件',
        'send_confirmation' => '是否发送这篇新闻邮件?',
        'resend' => '重新发送新闻邮件',
        'resend_confirmation' => '是否要重新发送这篇新闻邮件?',
        'return' => '返回'
    ],
    'flash' => [
        'activate' => '成功激活这些文章。',
        'deactivate' => '成功关闭这些文章。',
        'draft' => '成功修改这些文章为草稿',
        'subscribe' => '这些用户成功订阅。',
        'unsubscribe' => '这些用户成功取消订阅。',
        'delete' => '您要删除这些项吗?',
        'remove' => '成功删除了这些项。',
        'newsletter_test_error' => '发送测试新闻邮件时出错。',
        'newsletter_send_success' => '新闻邮件已成功发送。',
        'newsletter_send_error' => '发送新闻邮件时出错。在重新发送之前，请查看日志以获得关于当前状态的更多信息!',
        'newsletter_resend_success' => '新闻邮件已成功重新发送。',
        'newsletter_resend_error' => '重新发送新闻邮件时发生错误。在重新发送之前，请查看日志以获得关于当前状态的更多信息。',
        'subscriber_confirmation_token_invalid' => '确认链接或令牌无效。',
        'subscriber_confirmation_token_expired' => '您的确认链接已过期，请重新注册。',
        'subscriber_confirmation' => '您成功地确认了您的电子邮件地址。你将收到最新的新闻邮件。',
        'subscriber_already_confirmed' => '您的账户已经确认。',
        'news_clone_confirm' => '你想复制这篇文章吗?'
    ],
    'backend_settings' => [
        'description' => '关于发送新闻邮件和统计信息视图的设置。',
        'main_section' => '关于发送和处理新闻邮件的设置',
        'click_tracking' => '跟踪点击',
        'click_tracking_comment' => '跟踪用户何时单击新闻邮件的链接。',
        'email_view_tracking' => '跟踪新闻邮件访问量',
        'email_view_tracking_comment' => '跟踪一个人何时查看新闻邮件。',
        'email_view_tracking_warning' => [
            'heading' => '使用这个特性时要小心',
            'subheading' => '不是每个国家都允许这样做的!',
            'text' => '当你使用这个功能时，你应该确定你在做什么!确保你没有违反任何法律。'
        ],
        'newsletter_double_opt_in' => '确认注册新闻邮件',
        'newsletter_double_opt_in_comment' => '向新订阅者发送电子邮件，确认他的电子邮件地址',
        'admin_section' => '网站管理员设置',
        'show_posts' => '在前端显示以下文章给后端用户:',
        'statistic_show_posts' => '显示文章量',
        'statistic_show_mails' => '显示邮件日志量',
        'statistic_show_longest_posts' => '显示浏览时间最长的文章',
        'statistic_show_shortest_posts' => '显示浏览时间最短的文章',
        'statistic_comment' => '在统计页面。',
        'extra_fields' => '新闻表单的额外字段'
    ],
    'widget' => [
        'posts' => '新闻 - 文章',
        'newposts' => '新闻 - 最新文章',
        'topposts' => '新闻 - Top 文章',
        'subscribers' => '新闻 - 订阅者',
        'show_total' => '显示总数',
        'show_active' => '显示有效的',
        'show_inactive' => '显示无效的',
        'show_draft' => '显示草稿',
        'show_category' => '显示分类',
        'show_piece' => '文章数量',
        'show_date' => '显示日期',
        'show_rank' => '显示排行榜',
        'show_unsub' => '显示取消订阅的',
        'show_pending' => '显示待处理',
        'total' => '总数'
    ],
    'component' => [
        'posts' => '文章列表',
        'post' => '文章内容',
        'categories' => '分类',
        'subscribe' => '订阅表单',
        'unsubscribe' => '取消订阅表单'
    ],
    'permission' => [
        'posts' => '文章管理',
        'categories' => '分类管理',
        'subscribers' => '订阅者管理',
        'statistics' => '查看统计',
        'import_export' => '导入和导出',
        'settings' => '改变设置',
        'logs' => '查看访问日志'
    ],
    'settings' => [
        'slug_title' => '文章 slug',
        'slug_description' => '使用slug值查看文章',
        'pagination_title' => '页码',
        'pagination_description' => '此值用于确定用户所在的页面。',
        'per_page_title' => '每页文章',
        'per_page_validation' => '每页的文章格式无效',
        'no_posts_title' => '没有文章信息',
        'no_posts_description' => '如果没有文章，显示在文章列表中的消息。 默认组件局部使用此属性。',
        'no_posts_found' => '找不到文章',
        'posts_order_title' => '文章顺序',
        'posts_order_description' => '文章列表根据哪个属性排序',
        'post_title' => '文章页面',
        'post_description' => '“了解更多”链接的文章页面文件的名称。默认组件部分使用此属性。',
        'featured_title' => '精选功能',
        'featured_description' => '选择显示哪些文章',
        'list_all' => '全部',
        'list_featured' => '只是推荐',
        'list_notfeatured' => '非推荐',
        'translated_title' => '只显示翻译后的文章',
        'translated_description' => '如果当前文章的语言不等于网站语言，隐藏文章。',
        'category_page_title' => '分类页面',
        'category_page_description' => '分类链接的分类页文件的名称。默认组件部分使用此属性。',
        'category_filter_title' => '过滤分类',
        'category_filter_description' => '输入一个分类 slug 或 URL 参数来过滤文章。留空显示所有文章。',
        'links' => '链接'
    ],
    'sorting' => [
        'title_asc' => 'Title (ascending)',
        'title_desc' => 'Title (descending)',
        'created_at_asc' => 'Created (ascending)',
        'created_at_desc' => 'Created (descending)',
        'updated_at_asc' => 'Updated (ascending)',
        'updated_at_desc' => 'Updated (descending)',
        'published_at_asc' => 'Published (ascending)',
        'published_at_desc' => 'Published (descending)',
        'statistics_asc' => 'Popularity (ascending)',
        'statistics_desc' => 'Popularity (descending)'
    ],
    'sitemap' => [
        'post_list' => '文章列表',
        'post_page' => '文章页面'
    ],
    'messages' => [
        'unsubscribed' => '成功取消订阅我们的新闻邮件。',
        'not_subscribed' => '已经订阅了我们的新闻邮件。',
        'subscribed' => '感谢您订阅我们的新闻邮件!'
    ]
];