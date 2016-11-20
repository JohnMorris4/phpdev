<?php
class ShareModel extends Model {
    public function Index(){
        $this->query('SELECT * FROM shares');
        $rows = $this->resultSet();
        //print_r($rows);
        return $rows;
    }

    public function add(){
       //sanatize the post array
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if($post['submit']){
           //add post
            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);
            $this->execute();

            //verify that info was submitted
            if($this->lastInsertId()){
                //redirect
                header('Location: '.ROOT_URL.'shares' );
            }
        }
        return;
    }
}
