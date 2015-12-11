<?php
class Ooredoo_Weblog_IndexController extends Mage_Core_Controller_Front_Action {
    public function testModelAction() {
          $params = $this->getRequest()->getParams();
    $blogpost = Mage::getModel('weblog/blogpost');
    echo("Loading the blogpost with an ID of ".$params['id']);
    $blogpost->load($params['id']);
        $blogpost->setBlogpostId(3);
     $blogpost->save();

    }
    public function createNewPostAction() {
    $blogpost = Mage::getModel('weblog/blogpost');
    $blogpost->setTitle('Code Post!');
    $blogpost->setPost('This post was created from code!');
    $blogpost->save();
    echo 'post with ID ' . $blogpost->getId() . ' created';
}
    public function editFirstPostAction() {
    $blogpost = Mage::getModel('weblog/blogpost');
    $blogpost->load(1);
    $blogpost->setTitle("The First post!");
    $blogpost->save();
    echo 'post edited';
}
    public function deleteFirstPostAction() {
    $blogpost = Mage::getModel('weblog/blogpost');
    $blogpost->load(1);
    $blogpost->delete();
    echo 'post removed';
}
 public function showAllBlogPostsAction() {
    $posts = Mage::getModel('weblog/blogpost')->getCollection();
    foreach($posts as $blogpost){
        echo '<h3>'.$blogpost->getTitle().'';
        echo nl2br($blogpost->getPost());
    }
}
}

