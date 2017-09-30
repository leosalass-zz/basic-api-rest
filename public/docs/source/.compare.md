---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_bb32209dcf7dc031a3ed454e31be20c6 -->
## api/v1/users/register

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users/register" \
-H "Accept: application/json" \
    -d "password"="libero" \
    -d "email"="sydney47@example.com" \
    -d "name"="libero" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/register",
    "method": "POST",
    "data": {
        "password": "libero",
        "email": "sydney47@example.com",
        "name": "libero"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users/register`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    password | string |  required  | Minimum: `6`
    email | email |  required  | Maximum: `255`
    name | string |  required  | Maximum: `99`

<!-- END_bb32209dcf7dc031a3ed454e31be20c6 -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## api/v1/users

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users" \
-H "Accept: application/json" \
    -d "password"="eligendi" \
    -d "email"="lenore05@example.org" \
    -d "name"="eligendi" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "POST",
    "data": {
        "password": "eligendi",
        "email": "lenore05@example.org",
        "name": "eligendi"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    password | string |  required  | Minimum: `6`
    email | email |  required  | Maximum: `255`
    name | string |  required  | Maximum: `99`

<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_743a08f7ac7458e8958a458658df4918 -->
## api/v1/users/id/{id_user}

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/id/{id_user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/id/{id_user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users/id/{id_user}`

`HEAD api/v1/users/id/{id_user}`


<!-- END_743a08f7ac7458e8958a458658df4918 -->

<!-- START_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
## api/v1/users

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users`

`HEAD api/v1/users`


<!-- END_080f3ecebb7bcc2f93284b8f5ae1ac3b -->

<!-- START_dfcc42b179fc9e9965fd85795c92338b -->
## api/v1/users

> Example request:

```bash
curl -X PATCH "http://localhost/api/v1/users" \
-H "Accept: application/json" \
    -d "id_user"="318466964" \
    -d "password"="ratione" \
    -d "email"="morar.kirsten@example.net" \
    -d "name"="ratione" \
    -d "state"="318466964" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "PATCH",
    "data": {
        "id_user": 318466964,
        "password": "ratione",
        "email": "morar.kirsten@example.net",
        "name": "ratione",
        "state": 318466964
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    id_user | integer |  required  | Minimum: `1` Valid user id
    password | string |  optional  | Minimum: `6`
    email | email |  optional  | Maximum: `255`
    name | string |  optional  | Maximum: `99`
    state | integer |  optional  | Minimum: `1` Valid user_state id

<!-- END_dfcc42b179fc9e9965fd85795c92338b -->

<!-- START_1143e0cd893b8e0d578684bbcda58f34 -->
## api/v1/users

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/users`


<!-- END_1143e0cd893b8e0d578684bbcda58f34 -->

<!-- START_0e68ec6088fb894fc75525bd09d741c6 -->
## api/v1/users/id/{id_user}/roles

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/id/{id_user}/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/id/{id_user}/roles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users/id/{id_user}/roles`

`HEAD api/v1/users/id/{id_user}/roles`


<!-- END_0e68ec6088fb894fc75525bd09d741c6 -->

<!-- START_e9f6de252b9dd1a156d7def454a01c6e -->
## api/v1/users/roles

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/roles",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users/roles`


<!-- END_e9f6de252b9dd1a156d7def454a01c6e -->

<!-- START_90ce46336c4cfd437aa4143126c03f1e -->
## api/v1/users/roles

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/users/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/roles",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/users/roles`


<!-- END_90ce46336c4cfd437aa4143126c03f1e -->

<!-- START_24eed05c7585e67cfc2f16cf057e9964 -->
## api/v1/users/id/{id_user}/permissions

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/id/{id_user}/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/id/{id_user}/permissions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users/id/{id_user}/permissions`

`HEAD api/v1/users/id/{id_user}/permissions`


<!-- END_24eed05c7585e67cfc2f16cf057e9964 -->

<!-- START_63ac096fb771165ee332dfbb1bd8d000 -->
## api/v1/users/permissions

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/permissions",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users/permissions`


<!-- END_63ac096fb771165ee332dfbb1bd8d000 -->

<!-- START_9ce479912c3b286cdb96d9497384b3bd -->
## api/v1/users/permissions

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/users/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/permissions",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/users/permissions`


<!-- END_9ce479912c3b286cdb96d9497384b3bd -->

<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## api/v1/roles

> Example request:

```bash
curl -X POST "http://localhost/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/roles`


<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_d97fba8dbd0d0033960fdc6a25fca8d9 -->
## api/v1/roles

> Example request:

```bash
curl -X GET "http://localhost/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles`

`HEAD api/v1/roles`


<!-- END_d97fba8dbd0d0033960fdc6a25fca8d9 -->

<!-- START_6d9fbad03392895d5be6aa1356912199 -->
## api/v1/roles

> Example request:

```bash
curl -X PATCH "http://localhost/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/roles`


<!-- END_6d9fbad03392895d5be6aa1356912199 -->

<!-- START_debddd110e7ecbf60049a48398d280f3 -->
## api/v1/roles

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/roles`


<!-- END_debddd110e7ecbf60049a48398d280f3 -->

<!-- START_50555c56e62f3eeed1d8dad5b1cf5ed6 -->
## api/v1/roles/id/{id_rol}/permissions

> Example request:

```bash
curl -X GET "http://localhost/api/v1/roles/id/{id_rol}/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles/id/{id_rol}/permissions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles/id/{id_rol}/permissions`

`HEAD api/v1/roles/id/{id_rol}/permissions`


<!-- END_50555c56e62f3eeed1d8dad5b1cf5ed6 -->

<!-- START_5ea13c01baf1124bd41ccce2611adf16 -->
## api/v1/roles/permissions

> Example request:

```bash
curl -X POST "http://localhost/api/v1/roles/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles/permissions",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/roles/permissions`


<!-- END_5ea13c01baf1124bd41ccce2611adf16 -->

<!-- START_9dc210527f093bae6224abf31815b648 -->
## api/v1/roles/permissions

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/roles/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/roles/permissions",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/roles/permissions`


<!-- END_9dc210527f093bae6224abf31815b648 -->

<!-- START_defb597dbd6eb21dee1f472ef6340873 -->
## api/v1/permissions

> Example request:

```bash
curl -X POST "http://localhost/api/v1/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/permissions",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/permissions`


<!-- END_defb597dbd6eb21dee1f472ef6340873 -->

<!-- START_12c77c0afe8dfd7d5653b62a33eb1954 -->
## api/v1/permissions

> Example request:

```bash
curl -X GET "http://localhost/api/v1/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/permissions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/permissions`

`HEAD api/v1/permissions`


<!-- END_12c77c0afe8dfd7d5653b62a33eb1954 -->

<!-- START_03e7e0be479e376ac3caa8cd8da1cb7c -->
## api/v1/permissions

> Example request:

```bash
curl -X PATCH "http://localhost/api/v1/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/permissions",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/permissions`


<!-- END_03e7e0be479e376ac3caa8cd8da1cb7c -->

<!-- START_860c85f1db72e5b3fd1911fac4889f67 -->
## api/v1/permissions

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/permissions",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/permissions`


<!-- END_860c85f1db72e5b3fd1911fac4889f67 -->

