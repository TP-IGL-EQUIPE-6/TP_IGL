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


<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## /
> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_f453d442cbe270ed50c2def3a3416115 -->
## about
> Example request:

```bash
curl -X GET \
    -G "http://localhost/about" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/about"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET about`


<!-- END_f453d442cbe270ed50c2def3a3416115 -->

<!-- START_dafb4ae2651e3d6459ecad837cdb9e9f -->
## marks
> Example request:

```bash
curl -X GET \
    -G "http://localhost/marks" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/marks"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET marks`


<!-- END_dafb4ae2651e3d6459ecad837cdb9e9f -->

<!-- START_6ec91152c77eb2573957bdb6dd098e84 -->
## marks/create
> Example request:

```bash
curl -X GET \
    -G "http://localhost/marks/create" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/marks/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET marks/create`


<!-- END_6ec91152c77eb2573957bdb6dd098e84 -->

<!-- START_5915888e6945532275df0cc61dad71f3 -->
## marks/getData
> Example request:

```bash
curl -X GET \
    -G "http://localhost/marks/getData" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/marks/getData"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET marks/getData`


<!-- END_5915888e6945532275df0cc61dad71f3 -->

<!-- START_c09e6b397059d6dce2f77a313e6c44b7 -->
## marks/listeEtudiant
> Example request:

```bash
curl -X GET \
    -G "http://localhost/marks/listeEtudiant" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/marks/listeEtudiant"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET marks/listeEtudiant`


<!-- END_c09e6b397059d6dce2f77a313e6c44b7 -->

<!-- START_747cdd3795f9b415ced834e3e503c1f6 -->
## students/CreerEtudiantForm
> Example request:

```bash
curl -X GET \
    -G "http://localhost/students/CreerEtudiantForm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/students/CreerEtudiantForm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET students/CreerEtudiantForm`


<!-- END_747cdd3795f9b415ced834e3e503c1f6 -->

<!-- START_b4a2a20fca73d4f778a9a2c8f2089d54 -->
## students/store
> Example request:

```bash
curl -X POST \
    "http://localhost/students/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/students/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST students/store`


<!-- END_b4a2a20fca73d4f778a9a2c8f2089d54 -->


