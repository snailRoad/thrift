struct Book{
1: string name,
2: string author,
}

service BookManage {
	list<Book> bookList();
	bool  addBook(1:Book book);
	bool  updateBook(1:Book book);
}