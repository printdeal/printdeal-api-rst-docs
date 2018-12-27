Validate product and retrieve price
===================================

To make sure you have an order-able product, you can validate the attributes and values. Send the attributes and values in a ``POST`` request to ``/api/products/{sku}``.

If you can order your product, you will receive the following data: ``price`` and ``delivery days``

**Small note, the delivery days are working days, so holidays and weekends needs to be added to get the actual date.**

If the product is invalid, you will retrieve a 400 status code.

The following request can be used as an example:

An example:
  .. code-block:: JSON
   :linenos:

    {
        "attributes": [
            {
                "attribute": "format",
                "value": "A4"
            },
            {
                "attribute": "material",
                "value": "lasergeschikt bankpost wit"
            },
            {
                "attribute": "weight",
                "value": "80 grs"
            },
            {
                "attribute": "printing colors",
                "value": "1/0 PMS"
            },
            {
                "attribute": "printing process",
                "value": "PMS colors"
            },
            {
                "attribute": "quantity",
                "value": "500"
            },
            {
                "attribute": "delivery time",
                "value": "normal"
            },
            {
                "attribute": "letterheads punchholes",
                "value": "2 punchholes"
            },
            {
                "attribute": "bundling",
                "value": "no bundling"
            }
        ]
    }