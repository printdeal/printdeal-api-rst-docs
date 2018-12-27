External ID
===========

You can pass an externalId for every orderline you have in your order. The externalId is basically an alternative for an id, only difference is that you can set it yourself. You can use this field if you want a value that is easier to remember (unlike the UUID) or you can use it as additional field to track something of your wishes.


The externalId has to be unique in order to retrieve the correct order trough the retrieve order by externalId endpoint. If you send multiple orders with the same externalId we currently cannot guarantee that you will get the right order back through this endpoint. This means that you, and only you are responsible for making sure your externalId is not used in any other orderlines.


When using an externalId keep in mind that we do not support the slash ‘/’ character. This is because slashes are reserved characters within the request URI. If you use a slash in your request we also cannot guarantee that you get the correct result back when retrieving your order.