.. _adding_file:

Adding file to an orderline
===========================

To add a file to an orderline, send a ``POST`` request to ``/api/orderlines/{orderlineId}/files``.
The body needs to contain JSON data with file url. For example:

  .. code-block:: JSON
   :linenos:

    {
        "files": [
            {
                "url": "https://www.test.nl/file.pdf"
            }
        ]
    }

The response, if successfully will be a JSON object with the following data:

  .. code-block:: JSON
   :linenos:

    "File upload is scheduled"

You can add file to an orderline which does not contain any file and you will be able to add only one file at this moment.
If you can no longer add file to an orderline, you will receive a ``500 Internal Server Error``

***************
Example request
***************

The following PHP code can be used to add a file to an orderline.
Make sure you replace the values ``YOUR_USER_ID_HERE`` and ``YOUR_SECRET_HERE``
with the User-ID and secret you received on the API-credentials page.

Make sure to replace ``ORDERLINEID`` with the id of the orderline you would like to add file,
and ``URL`` with the file url.

.. literalinclude:: ../code_examples/Orderlines/Adding_file_example.php
   :language: PHP
   :linenos:
