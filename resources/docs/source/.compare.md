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

#Etudiant

API pour gérer les étudiants
<!-- START_747cdd3795f9b415ced834e3e503c1f6 -->
## createEtudiant()
Afficher le formulaire de creation d&#039;un nouvel étudiant

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
## storeEtudiant()
Sauvgarder les données récuperer à partir du formulaire de creation d&#039;un étudiant
 dans la table &lt;&lt;etudiants&gt;&gt; de la DB et se redirger vers la page d&#039;acceuil

> Example request:

```bash
curl -X POST \
    "http://localhost/students/store" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"nom":"BAIBA","prenom":"Loubna","niveau":"1CS","section":"B","grp":9}'

```

```javascript
const url = new URL(
    "http://localhost/students/store"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nom": "BAIBA",
    "prenom": "Loubna",
    "niveau": "1CS",
    "section": "B",
    "grp": 9
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST students/store`

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `id` | integer |  optional  | l'idantifiant de l'etudiant.
        `nom` | String |  required  | le nom de l'etudiant.
        `prenom` | String |  required  | le prenom de l'etudiant.
        `niveau` | String |  required  | le niveau de l'etudiant.
        `section` | String |  required  | la section de l'etudiant.
        `grp` | integer |  required  | le groupe de l'etudiant.
    
<!-- END_b4a2a20fca73d4f778a9a2c8f2089d54 -->

#Moyenne

API pour gerer les moyennes des etudiants
<!-- START_dafb4ae2651e3d6459ecad837cdb9e9f -->
## index()
recupere la liste de tous les étudiants a partir de la BDD
et la transmets en paramettre à la vue &quot;marks.index&quot;

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
## create()
retoune une vue du formuaire pour rechercher les moyennes d&#039;un groupe

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
## getData()
afficher les nom des etudiants et calcul leur moyennes

> Example request:

```bash
curl -X GET \
    -G "http://localhost/marks/getData" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"niveau":"1CS","grp":9}'

```

```javascript
const url = new URL(
    "http://localhost/marks/getData"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "niveau": "1CS",
    "grp": 9
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
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

#### Body Parameters
Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    `niveau` | String |  required  | le niveau d'étude.
        `grp` | integer |  required  | le numero du groupe.
    
<!-- END_5915888e6945532275df0cc61dad71f3 -->

#Pages

API pour gérer le pages
<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## welcome()
retoune une vue de la page d&#039;accueil

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
## about()
retoune une vue de la page d&#039;apropos

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

#general


<!-- START_41d2f7697c6118f36f8b676e5bd19ea0 -->
## Login using the given user ID / email.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_dusk/login/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_dusk/login/1/"
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



### HTTP Request
`GET _dusk/login/{userId}/{guard?}`


<!-- END_41d2f7697c6118f36f8b676e5bd19ea0 -->

<!-- START_6375e7300024aae0f6af283b4a72cb1b -->
## Log the user out of the application.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_dusk/logout/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_dusk/logout/"
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



### HTTP Request
`GET _dusk/logout/{guard?}`


<!-- END_6375e7300024aae0f6af283b4a72cb1b -->

<!-- START_09dcf3e9a9b6585fa40e4ead6c3c858a -->
## Retrieve the authenticated user identifier and class name.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/_dusk/user/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/_dusk/user/"
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
[]
```

### HTTP Request
`GET _dusk/user/{guard?}`


<!-- END_09dcf3e9a9b6585fa40e4ead6c3c858a -->


