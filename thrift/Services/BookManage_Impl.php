<?php
/*
 * BookManageService
 */
class BookManage_Impl implements BookManageIf {
	
	  public $book = array();
	  public function bookList(){
	 	$this->book[] = new Book(array('name'=>'飘','author'=>'米切尔'));
	  	//$book = new Book();
	  	//$book->name = "后会无期";
	  	//$book->author = "韩寒";
	  	return $this->book;
	  }
	  public function addBook($book){
	  	return true;
	  }
	  public function updateBook($book){
	  	
	  	return true;
	  }
}