############################
Getting Started with the API
############################

.. toctree::
   :titlesonly:
   :hidden:

**Register an Account on the API Documentation Website**

To access the API, you must obtain API credentials linked to an account on the API documentation website. You can create an account here. The registration process is simple and requires only an email address and a password.

**Generate API Credentials**

Once your account is registered, navigate to the My API Credentials page. Here, you can create a new set of API credentials. Each set consists of a User ID and a Secret, which must be included in every API request.

At this stage, you do not need to link your account to an existing Drukwerkdeal or Printdeal account. Any requests made using unlinked credentials will return sample data, allowing you to test and develop with the API.

You are now ready to start coding! For example, you might begin by creating orders.

**Link Your Account (After Completing Integration)**

Once you have completed your integration and are ready to work with live data, you can link your API credentials to a Drukwerkdeal or Printdeal account. If you do not yet have an account, you can register at:

* Drukwerkdeal
* Printdeal

To link your account:

#. Go to the My API Credentials page.
#. Select either Drukwerkdeal or Printdeal from the dropdown menu.
#. You will be redirected to the respective website to approve the connection.
#. After approval, you will return to the My API Credentials page, where the linked account status will be displayed.

Once your account is linked, all API requests will provide live data.

*******************
Making API Requests
*******************

All API requests should use the following base URL:
``https://api.printdeal.com/api``

**Example Endpoints:**

* ``GET`` ``/api/orders``: Retrieve a list of your orders.
* ``GET`` ``/api/orders/{id}``: Retrieve details for a specific order.
* ``POST`` ``/api/orders``: Create a new order.
* ``PUT`` ``/api/orders/{id}`` or ``POST`` ``/api/orders/{id}``: Update an existing order.
* ``DELETE`` ``/api/orders/{id}``: Cancel an order.

The API follows RESTful principles and communicates over HTTPS using the HTTP protocol. Supported HTTP methods include **GET**, **POST**, **PUT**, and **DELETE**.

***********************
Technical Documentation
***********************
For detailed information on available endpoints and their usage, refer to the `API Technical Documentation <https://api.printdeal.com/doc>`_. This resource includes all the necessary details for implementing the API endpoints.