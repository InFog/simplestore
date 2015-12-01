# Simple Store

This is a simple shop application used as a teaching tool. It was first used
during the "Blick in den Beruf" at "Universität Bamberg" for a two hours
workshop about online stores. The idea is to have the students "filling the
blanks" by implementing missing features like the category listing and the
search.

## Possible tasks

 - Filter products by category
 - Make the search actually work
 - Search by name, description and categories
 - Fetch categories from database
 - Show messages like product added to or removed from cart
 - Add more image types to admin
 - Add a way to delete products' images
 - Add a logout option on admin interface
 - Show messages like product added to or removed from database
 - Move admin users to database and shadow the passwords
 - Add validation to product insert and edit forms
 - Add pagination to storefront and admin product lists
 - Add one page after the checkout to ask for customer's data
 - Send e-mail to admin after each order

## Procedural?

The goal of this project is to be as simple as possible to just give an
overview on how an online store works, with admin tool and storefront catalog.

Having a bunch of function calls helps keeping things simple for beginners to
understand what is going on and to poke around trying to add features or fix
bugs.

Also, I didn't want to spend time explaining front controllers, that's why
this project works by direct php files requests.

Even with some restrictions to make it simple to understand I tried to have
some separation of concerns like views just displaying stuff and having no
business rules and kind of separated files for database handling, etc.

I also kept the project framework free, again, to avoid making it too complex
to explain and poke within a two hours workshop. The exception is the frontend
framework (Ink)[http://ink.sapo.pt/].

## Cool, I want to use it

Go ahead, use it as a teaching tool or something like that. Don't try to use it
for production, but I guess you are smart enough to know that, right?

## License

Copyright (c) 2015 Evaldo Junior Bento

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.  IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
