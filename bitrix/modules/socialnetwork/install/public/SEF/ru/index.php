<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Социальная сеть");
?><?$APPLICATION->IncludeComponent("bitrix:socialnetwork", ".default", array(
	"ITEM_DETAIL_COUNT" => "32",
	"ITEM_MAIN_COUNT" => "6",
	"DATE_TIME_FORMAT" => "d.m.Y H:i:s",
	"NAME_TEMPLATE" => "",
	"PATH_TO_SEARCH_EXTERNAL" => "",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SEF_FOLDER#",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_SHADOW" => "Y",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_TIME_LONG" => "604800",
	"PATH_TO_SMILE" => "/bitrix/images/socialnetwork/smile/",
	"PATH_TO_BLOG_SMILE" => "/bitrix/images/blog/smile/",
	"SET_TITLE" => "Y",
	"SET_NAV_CHAIN" => "Y",
	"USER_FIELDS_MAIN" => array(
		0 => "LAST_LOGIN",
		1 => "DATE_REGISTER",
		2 => "PERSONAL_BIRTHDAY",
		3 => "PERSONAL_GENDER",
	),
	"USER_PROPERTY_MAIN" => array(
		0 => "UF_USER_CAR_DEMO",
	),
	"USER_FIELDS_CONTACT" => array(
		0 => "EMAIL",
		1 => "PERSONAL_WWW",
		2 => "PERSONAL_ICQ",
		3 => "PERSONAL_PHONE",
		4 => "PERSONAL_FAX",
		5 => "PERSONAL_MOBILE",
	),
	"USER_PROPERTY_CONTACT" => array(
	),
	"USER_FIELDS_PERSONAL" => array(
		0 => "PERSONAL_PROFESSION",
		1 => "PERSONAL_NOTES",
	),
	"USER_PROPERTY_PERSONAL" => array(
	),
	"SET_NAVCHAIN" => "Y",
	"AJAX_LONG_TIMEOUT" => "60",
	"EDITABLE_FIELDS" => array(
		0 => "LOGIN",
		1 => "NAME",
		2 => "SECOND_NAME",
		3 => "LAST_NAME",
		4 => "EMAIL",
		5 => "PERSONAL_BIRTHDAY",
		6 => "PERSONAL_WWW",
		7 => "PERSONAL_ICQ",
		8 => "PERSONAL_GENDER",
		9 => "PERSONAL_PHOTO",
		10 => "PERSONAL_NOTES",
		11 => "PERSONAL_PHONE",
		12 => "PERSONAL_FAX",
		13 => "PERSONAL_MOBILE",
		14 => "PERSONAL_PAGER",
		15 => "PERSONAL_COUNTRY",
		16 => "PERSONAL_STATE",
		17 => "PERSONAL_CITY",
		18 => "PERSONAL_ZIP",
		19 => "PERSONAL_STREET",
		20 => "PERSONAL_MAILBOX",
		21 => "UF_USER_CAR_DEMO",
		22 => "PASSWORD",
		23 => "FORUM_SHOW_NAME",
		24 => "FORUM_DESCRIPTION",
		25 => "FORUM_INTERESTS",
		26 => "FORUM_SIGNATURE",
		27 => "FORUM_AVATAR",
		28 => "FORUM_HIDE_FROM_ONLINE",
		29 => "FORUM_SUBSC_GET_MY_MESSAGE",
		30 => "BLOG_ALIAS",
		31 => "BLOG_DESCRIPTION",
		32 => "BLOG_INTERESTS",
		33 => "BLOG_AVATAR",
		34 => "TIME_ZONE",
	),
	"SHOW_YEAR" => "Y",
	"USER_FIELDS_SEARCH_SIMPLE" => array(
		0 => "PERSONAL_CITY",
	),
	"USER_PROPERTIES_SEARCH_SIMPLE" => array(
		0 => "UF_USER_CAR_DEMO",
	),
	"USER_FIELDS_SEARCH_ADV" => array(
		0 => "PERSONAL_GENDER",
		1 => "PERSONAL_COUNTRY",
		2 => "PERSONAL_CITY",
	),
	"USER_PROPERTIES_SEARCH_ADV" => array(
		0 => "UF_USER_CAR_DEMO",
	),
	"SONET_USER_FIELDS_LIST" => array(
		0 => "PERSONAL_BIRTHDAY",
		1 => "PERSONAL_GENDER",
		2 => "PERSONAL_CITY",
	),
	"SONET_USER_PROPERTY_LIST" => array(
		0 => "UF_USER_CAR_DEMO",
	),
	"SONET_USER_FIELDS_SEARCHABLE" => array(
		0 => "LOGIN",
		1 => "NAME",
		2 => "SECOND_NAME",
		3 => "LAST_NAME",
		4 => "PERSONAL_BIRTHDAY",
		5 => "PERSONAL_BIRTHDAY_YEAR",
		6 => "PERSONAL_BIRTHDAY_DAY",
		7 => "PERSONAL_PROFESSION",
		8 => "PERSONAL_GENDER",
		9 => "PERSONAL_COUNTRY",
		10 => "PERSONAL_STATE",
		11 => "PERSONAL_CITY",
		12 => "PERSONAL_ZIP",
		13 => "PERSONAL_STREET",
		14 => "PERSONAL_MAILBOX",
		15 => "WORK_COMPANY",
		16 => "WORK_DEPARTMENT",
		17 => "WORK_POSITION",
		18 => "WORK_COUNTRY",
		19 => "WORK_STATE",
		20 => "WORK_CITY",
		21 => "WORK_ZIP",
		22 => "WORK_STREET",
		23 => "WORK_MAILBOX",
	),
	"SONET_USER_PROPERTY_SEARCHABLE" => array(
		0 => "UF_USER_CAR_DEMO",
	),
	"SHOW_RATING" => "Y",
	"RATING_ID" => "",
	"RATING_TYPE" => "like",
	"BLOG_GROUP_ID" => "#BLOG_GROUP_ID#",
	"FORUM_ID" => "#FORUM_ID#",
	"PHOTO_USER_IBLOCK_TYPE" => "#PHOTO_IBLOCK_TYPE#",
	"PHOTO_USER_IBLOCK_ID" => "#PHOTO_USER_IBLOCK_ID#",
	"PHOTO_GROUP_IBLOCK_TYPE" => "#PHOTO_IBLOCK_TYPE#",
	"PHOTO_GROUP_IBLOCK_ID" => "#PHOTO_GROUP_IBLOCK_ID#",
	"PHOTO_UPLOAD_MAX_FILESIZE" => "2",
	"PHOTO_UPLOAD_MAX_FILE" => "4",
	"PHOTO_USE_RATING" => "Y",
	"PHOTO_USE_COMMENTS" => "N",
	"SEF_URL_TEMPLATES" => array(
		"index" => "index.php",
		"user" => "user/#user_id#/",
		"user_friends" => "user/#user_id#/friends/",
		"user_friends_add" => "user/#user_id#/friends/add/",
		"user_friends_delete" => "user/#user_id#/friends/delete/",
		"user_groups" => "user/#user_id#/groups/",
		"user_groups_add" => "user/#user_id#/groups/add/",
		"group_create" => "user/#user_id#/groups/create/",
		"user_profile_edit" => "user/#user_id#/edit/",
		"user_settings_edit" => "user/#user_id#/settings/",
		"user_features" => "user/#user_id#/features/",
		"search" => "search/",
		"group" => "group/#group_id#/",
		"group_search" => "group/search/",
		"group_search_subject" => "group/search/#subject_id#/",
		"group_edit" => "group/#group_id#/edit/",
		"group_delete" => "group/#group_id#/delete/",
		"group_request_search" => "group/#group_id#/user_search/",
		"user_request_group" => "group/#group_id#/user_request/",
		"group_requests" => "group/#group_id#/requests/",
		"group_mods" => "group/#group_id#/moderators/",
		"group_users" => "group/#group_id#/users/",
		"group_ban" => "group/#group_id#/ban/",
		"user_leave_group" => "group/#group_id#/user_leave/",
		"group_features" => "group/#group_id#/features/",
		"group_request_user" => "group/#group_id#/user/#user_id#/request/",
		"group_request_group_search" => "group/#user_id#/group_search/",
		"message_form" => "messages/form/#user_id#/",
		"message_form_mess" => "messages/form/#user_id#/#message_id#/",
		"user_ban" => "messages/ban/",
		"messages_chat" => "messages/chat/#user_id#/",
		"messages_input" => "messages/input/",
		"messages_input_user" => "messages/input/#user_id#/",
		"messages_output" => "messages/output/",
		"messages_output_user" => "messages/output/#user_id#/",
		"messages_users" => "messages/",
		"messages_users_messages" => "messages/#user_id#/",
		"log" => "log/",
		"subscribe" => "subscribe/",
		"user_subscribe" => "user/#user_id#/subscribe/",
		"group_subscribe" => "group/#group_id#/subscribe/",
		"user_photo" => "user/#user_id#/photo/",
		"user_calendar" => "user/#user_id#/calendar/",
		"user_files" => "user/#user_id#/files/lib/#path#",
		"group_blog" => "group/#group_id#/blog/",
		"group_photo" => "group/#group_id#/photo/",
		"group_forum" => "group/#group_id#/forum/",
		"group_calendar" => "group/#group_id#/calendar/",
		"group_files" => "group/#group_id#/files/#path#",
		"user_blog" => "user/#user_id#/blog/",
		"user_blog_post_edit" => "user/#user_id#/blog/edit/#post_id#/",
		"user_blog_rss" => "user/#user_id#/blog/rss/#type#/",
		"user_blog_draft" => "user/#user_id#/blog/draft/",
		"user_blog_post" => "user/#user_id#/blog/#post_id#/",
		"user_forum" => "user/#user_id#/forum/",
		"user_forum_topic_edit" => "user/#user_id#/forum/edit/#topic_id#/",
		"user_forum_topic" => "user/#user_id#/forum/#topic_id#/",
		"group_blog_post_edit" => "group/#group_id#/blog/edit/#post_id#/",
		"group_blog_rss" => "group/#group_id#/blog/rss/#type#/",
		"group_blog_draft" => "group/#group_id#/blog/draft/",
		"group_blog_post" => "group/#group_id#/blog/#post_id#/",
		"group_forum_topic_edit" => "group/#group_id#/forum/edit/#topic_id#/",
		"group_forum_topic" => "group/#group_id#/forum/#topic_id#/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>