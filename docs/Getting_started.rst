===============
Getting started
===============

.. toctree::
   :titlesonly:
   :hidden:


| **1. Register on the API documentation website**

To use the API, you need to have API-credentials that are linked to an account on this website. You can register this account here. All you need is an email address and password.

| **2. Create API credentials**

After you registered your account, navigate to the My API-credentials page. From here you can create a new set of credentials. The credentials consist of a User-ID and a secret. These need to be provided with every request that you make to the API. You don’t need to link the account to an existing account yet, all requests that you make with credentials that aren’t linked will give you sample data in response.

After this step, you can start coding! A next step could be creating orders.

| **3. Link your account (when you are finished integrating)**

When you finished coding and integrating the API, you can use the same credentials to use live data. This is done by linking the credentials to a Drukwerkdeal (NL) or Printdeal (BE) account. If you don’t have an account on Drukwerkdeal or Printdeal, visit https://www.drukwerkdeal.nl or https://www.printdeal.be and register an account there.

To link your account, navigate to My API-credentials. and select either Drukwerkdeal or Printdeal in the dropdown. You will be forwarded to the corresponding website and presented with an approval screen. To link the account, click Approve and you will be redirected back to the My API-Credentials page. You will see that your account is linked. All subsequent API requests that you make will respond with live data.


API Requests
============

All requests start with the following URL:
``https://api.printdeal.com/api``

For example, to retrieve your orders, the following URL must be used:
``https://api.printdeal.com/api/orders``

The API is a RESTful API, that uses the HTTP protocol for communication. HTTP ``GET``, ``POST``, ``PUT`` and ``DELETE`` methods are used to access the API.

Some examples:

- ``GET`` ``/api/orders will`` return your orders
- ``GET`` ``/api/orders/{id}`` will return a specific order
- ``POST`` ``/api/orders`` allows you to create an order
- ``PUT`` (or ``POST``) ``/api/orders/{id}`` enables you to update the order
- ``DELETE`` ``/api/orders/{id}`` cancels the order



Technical Documentation
=======================
To view the technical documentation, go to https://api.printdeal.com/doc.
This website contains all available endpoints and necessary information required to use the endpoint.