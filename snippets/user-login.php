<cms:set_session name='user_id' value=k_page_id/>

<cms:delete_cookie 'remember'/>

<cms:db_persist
	_masterpage = 'users.php'
	_mode = 'edit'
	_page_id = k_page_id

	user_failed_logins = '0'
	user_last_failed_login_time = '0'
	user_remember_token = ''
/>
