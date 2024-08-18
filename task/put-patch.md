<h2>diference between put and patch: </h2>


The main difference between PUT and PATCH is that PUT is idempotent, meaning calling it once or multiple times successively has the same effect, and it typically replaces the entire resource. In contrast, PATCH contains instructions on how to update parts of a resource and does not necessarily replace the entire resource. Successive identical PATCH requests may have different effects.
.  PUT- This operation changes a record's information in the database. if not existed it creats it. 
. PATCH - This operation updates an existing resource, but does not require sending the entire body with the request.
