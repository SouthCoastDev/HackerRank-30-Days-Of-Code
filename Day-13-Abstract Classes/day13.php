class MyBook : Book
{
  private int price = 0;
  public MyBook(String title, String author, int price):base(title, author)
  {
    this.price = price;
  }

  public override void display()
  {
          Console.WriteLine("Title: "+ title);
          Console.WriteLine("Author: " + author);
          Console.WriteLine("Price: " + price);
  }
}
     
