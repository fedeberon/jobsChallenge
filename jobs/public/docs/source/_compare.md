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

<!-- END_INFO -->

#general
<!-- START_a925a8d22b3615f12fca79456d286859 -->
## Get a JWT via given credentials.

To get a token from the API, you must login from an existing user account.

> Example request:

```bash
curl -X POST "http://localhost/api/auth/login" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/login");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "email": "admin@admin.com",
    "password": "adminadmin"
}
```

### HTTP Request
`POST api/auth/login`


<!-- END_a925a8d22b3615f12fca79456d286859 -->

<!-- START_19ff1b6f8ce19d3c444e9b518e8f7160 -->
## Log the user out (Invalidate the token).

> Example request:

```bash
curl -X POST "http://localhost/api/auth/logout" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/logout");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/auth/logout`


<!-- END_19ff1b6f8ce19d3c444e9b518e8f7160 -->

<!-- START_994af8f47e3039ba6d6d67c09dd9e415 -->
## Refresh a token.

> Example request:

```bash
curl -X POST "http://localhost/api/auth/refresh" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/refresh");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/auth/refresh`


<!-- END_994af8f47e3039ba6d6d67c09dd9e415 -->

<!-- START_a47210337df3b4ba0df697c115ba0c1e -->
## Get the authenticated User.

> Example request:

```bash
curl -X POST "http://localhost/api/auth/me" \
    -H "Authorization: Bearer {token}"
```

```javascript
const url = new URL("http://localhost/api/auth/me");

let headers = {
    "Authorization": "Bearer {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "Administrator",
    "email": "admin@admin.com",
    "email_verified_at": null,
    "created_at": "2019-04-17 17:03:09",
    "updated_at": "2019-04-17 17:03:09"
}
```

### HTTP Request
`POST api/auth/me`


<!-- END_a47210337df3b4ba0df697c115ba0c1e -->

<!-- START_92d13aaaf47a4c3afdd46371cfc75b4b -->
## Execute an operative type Job.

> Example request:

```bash
curl -X POST "http://localhost/api/operative" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"origin":"IaiRdP1wTMXD63xz","mode":"C0b91qily1Digwzb","name":"EX3msrC90OPQXkN3","status":16,"attempts":14,"queue":"kstQI0ZJdUw2wTwW","job":"TSPG56wrHR2WebwX","delay":14,"type":"RdrO17fgaVBzq6Kk","id":14}'

```

```javascript
const url = new URL("http://localhost/api/operative");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "origin": "IaiRdP1wTMXD63xz",
    "mode": "C0b91qily1Digwzb",
    "name": "EX3msrC90OPQXkN3",
    "status": 16,
    "attempts": 14,
    "queue": "kstQI0ZJdUw2wTwW",
    "job": "TSPG56wrHR2WebwX",
    "delay": 14,
    "type": "RdrO17fgaVBzq6Kk",
    "id": 14
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "origin": "not specified",
    "mode": "under",
    "name": "OfficeUpdate",
    "status": 0,
    "attempts": 1,
    "queue": "in process",
    "job": "in process",
    "duration": 15,
    "type": "operative",
    "id": 6
}
```

### HTTP Request
`POST api/operative`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    origin | string |  optional  | The origin of the Job instance.
    mode | string |  required  | Defines the priority of a given Job.
    name | string |  required  | Job name.
    status | integer |  optional  | (AUTO-GENERATED) Status of the Job.
    attempts | integer |  optional  | (AUTO-GENERATED) The amount of attempts accomplished until either success or failure of the Job.
    queue | string |  optional  | (NOT-REQUIRED) Inserts the Job in a Queue.
    job | string |  optional  | (AUTO-GENERATED) Status of the Job.
    delay | integer |  optional  | (NOT-REQUIRED) Defines the time the Job will wait to run. You can add time with numeric values.
    type | string |  optional  | (NOT-REQUIRED) Classifies the given job.
    id | integer |  optional  | (AUTO-GENERATED) Classifies Jobs by ID.

<!-- END_92d13aaaf47a4c3afdd46371cfc75b4b -->

<!-- START_a6c1d0581bbc8c2ddee10d5d03396f21 -->
## Execute a Defender type Job.

> Example request:

```bash
curl -X POST "http://localhost/api/defender" \
    -H "Authorization: Bearer {token}" \
    -H "Content-Type: application/json" \
    -d '{"fullscan":"ek8MjFYkOxg4Bq1Q","name":"1MC6hGgAEDKvk58G","status":12,"attempts":17,"queue":"lLZzfO01Nr46pSb6","job":"wdFrw4UrBpF3dVnI","delay":8,"type":"hMdFhXdEogTAfbL3","id":1}'

```

```javascript
const url = new URL("http://localhost/api/defender");

let headers = {
    "Authorization": "Bearer {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "fullscan": "ek8MjFYkOxg4Bq1Q",
    "name": "1MC6hGgAEDKvk58G",
    "status": 12,
    "attempts": 17,
    "queue": "lLZzfO01Nr46pSb6",
    "job": "wdFrw4UrBpF3dVnI",
    "delay": 8,
    "type": "hMdFhXdEogTAfbL3",
    "id": 1
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "fullscan": "true",
    "name": "malware",
    "status": 0,
    "attempts": 2,
    "queue": "in process",
    "job": "in process",
    "duration": 10,
    "type": "defender",
    "id": 2
}
```

### HTTP Request
`POST api/defender`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fullscan | string |  optional  | Defines priority and span of a given Job.
    name | string |  required  | Job name.
    status | integer |  optional  | (AUTO-GENERATED) Status of the Job.
    attempts | integer |  optional  | (AUTO-GENERATED) The amount of attempts accomplished until either success or failure of the Job.
    queue | string |  optional  | (NOT-REQUIRED) Inserts the Job in a Queue.
    job | string |  optional  | (AUTO-GENERATED) Status of the Job.
    delay | integer |  optional  | (NOT-REQUIRED) Defines the time the Job will wait to run. You can add time with numeric values.
    type | string |  optional  | (NOT-REQUIRED) Classifies the given job.
    id | integer |  optional  | (AUTO-GENERATED) Classifies Jobs by ID.

<!-- END_a6c1d0581bbc8c2ddee10d5d03396f21 -->


