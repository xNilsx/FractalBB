<?php
	$query = $this->db->query("SELECT * FROM `forum_content` WHERE `topic_id` ='".$slug."' ORDER BY `id` ASC");
	$topic_data = $query->result_array();

	foreach ($topic_data as $post) {
        $userquery = $this->db->query("SELECT * FROM `users` WHERE `username` ='".$post['author']."'");
        $user_data = $userquery->result_array();

        $post_count_query = $this->db->query("SELECT * FROM `forum_content` WHERE `author` ='".$user_data[0]['username']."'");
		echo '<tr>
                    <th class="text-center"><a href="'.base_url().'ucp/viewuser/'.$user_data[0]['username'].'">'.$user_data[0]['username'].'</a></th>
                    <th>'.$post['author'].'</th>
                </tr>
                <tr>
                    <td class="forum-avatar text-center">
                        <a href="'.base_url().'ucp/viewuser/'.$user_data[0]['username'].'"><img src="http://www.gravatar.com/avatar/'.md5(strtolower(trim($user_data[0]['email']))).'?s=64" class="img-circle" alt="avatar"></a>
                        <br><br><small><em>Level '.$user_data[0]['forum_rank'].'</em></small><br><small>'.$post_count_query->num_rows().' Posts</small>
                    </td>
                    <td class="forum-post">
                        <p>'.$post['content'].'</p>
                        <div class="forum-sign">
                            '.$user_data[0]['signature'].'
                        </div>
                    </td>
                </tr>';
	}
?>

