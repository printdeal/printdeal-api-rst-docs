.. _authentication:

Authentication
==============

.. toctree::
   :hidden:

*******************
Getting credentials
*******************
After you registered, you can request new credentials on the My API-credentials page. Click on the orange button that says ‘Create credential’. You will receive a User-ID and secret. Make sure you save this information, because for security reasons the secret will only appear once. You don’t need to link the credential yet.

The credentials can be used for building and testing your application, requests that are send to our API will give test data as response. When you want to use your credentials in a production environment you can link your Drukwerkdeal or Printdeal account on the My API-credentials page.

*********************
Using the credentials
*********************
Provide the following headers to make an authenticated request:

+-------------+------------------+
| Header name | Header value     |
+=============+==================+
| User-ID     | Your API User ID |
+-------------+------------------+
| API-Secret  | Your API Secret  |
+-------------+------------------+

Each request needs to have these headers, otherwise your request will fail.

***********************************
Example request with authentication
***********************************

The following PHP code can be used to create an authenticated request. Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE`` with the User-ID and secret you received on the API-credentials page


.. literalinclude:: ../docs/code_examples/Authentication_example.php
   :language: PHP
   :linenos:
