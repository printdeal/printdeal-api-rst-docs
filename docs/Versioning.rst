.. _versioning:

Versioning
==========

.. toctree::
   :hidden:

ℹ️ **Keep in mind you can't mix versions in your application**


When we make changes to our API that are not backwards-compatible, we release a new version of our API.
You can read our changelog to see the list of updates.

To determine the version, you can set the version header.

+-------------+---------------------------------------------+
| Header name | Header value                                |
+=============+=============================================+
| Accept      | application/vnd.printdeal-api.{version}     |
+-------------+---------------------------------------------+

Replace {version} with ``v1`` or ``v2``

ℹ️ **Request without this header will use v1 as a default for now.**

