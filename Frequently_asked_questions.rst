.. _frequently_asked_questions:

Frequently asked questions
==========================

**********************
Why did my order fail?
**********************

To keep the API nice and fast, we handle your request to create an order asynchronously. This means that if we accept your order and passed basic validation, you will receive an UUID from us. This UUID is needed to retrieve your order later on. It will take us 30 seconds up to 5 minutes in the worst case to process your order.

If your order has not been processed, or failed, you will receive a 404 error on the get order call with your UUID. If you still get a 404 error after 10 minutes, this will mean you provided an order that cannot be placed. Orders that cannot be placed are mostly related to the following causes:

* Invalid address data
* Invalid products
* Outdated category SKU is used

We are currently working on an event based system to give you exact details on where and why the order creation has failed.


Update on 21 December 2018:
---------------------------

The Printdeal API was updated at 21 December 2018 around 13:00, after this time, when an order creation failed, you now receive an 404 result, with an error message that the order creation has failed. Orders that failed before this date and time will have a 404 not found response.

******************
Dynamic attributes
******************
For us it is currently not possible to provide the attributes that have dynamic input.

If you have an category which contains the attribute: Format, with a value containing Custom Sizes, you need to also provide 2 new attributes yourself:
* Width & Height.

The same goes for quantity.

An example:

.. literalinclude:: ../docs/code_examples/Faq/dynamic.json
   :language: JSON
   :linenos:

Due too technical limitations, we are currently unable to provide these in the attribute & combinations endpoint.

We are currently working on a solution to provide ranges for the width & height attributes.

****************
Textile products
****************

Our Textile products work a bit differently then our other products. They also use dynamic attributes. With textile products you need to provide the following attributes, for creating an order or validating a product:

* Quantity
* Sizes
* Gender

An example:

.. literalinclude:: ../docs/code_examples/Faq/textiles.json
   :language: JSON
   :linenos:


In this case UM stands for unisex M size, and UL for unisex large. As you can see they are also provided in textile sizes.

****************
Category updates
****************

Our product managers regularly update categories. To ensure that your product still works as expected follow the following steps:

* Check if the sku is changed (GET api/products/categories)
* Retrieve the new SKU for the category
* Verify that all attributes & values are still names the same, if thats not the case adjust accordingly.

Since our categories are bound to change sometimes, we would reccomend to store them dynamically to make sure it is possible to change them

*************************
Combinations file too big
*************************

If you have issues with reading big combinations files (we have a few categories that are very big) we advise to use JSON stream readers.
These will not put the entire file in memory, but will read it in increments.

For examples see:

* https://github.com/skolodyazhnyy/json-stream
* https://github.com/halaxa/json-machine