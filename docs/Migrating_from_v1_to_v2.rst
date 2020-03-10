.. _migrating_from_v1_to_v2:

Migrating from v1 to v2
=======================

This major version brings a number of new features and a few incompatibilities that should be tested
before switching to the newer versions in production environments.

***********************
What's different in v2?
***********************

* **Products**
    * We introduced a complete new product catalogue.
      The endpoints will give back the same response but the Attributes and Attributes values are different.
      For an overview of the product mapping see the mapping document.
* **Creating an order**
    * Delivery is only possible at home or at work. Pickup at Antwerpen, Deventer or Dodewaard is not possible at the moment.
* **Changing orders**
    * Currently changing your order is not possible in v2
* **Structure of the combination files**
    * The structure of the combination files are changes, this wil reduce the size of the files. Read the :ref:`product combinations page<products/product_combinations>` for more information
