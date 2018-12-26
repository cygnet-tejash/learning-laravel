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

#Project management
<!-- START_893ae955e8991ef06f6de91adbff0aaa -->
## List

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://practice.local/api/projects" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU"
```

```javascript
const url = new URL("http://practice.local/api/projects");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 15,
            "title": "From API6",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt nibh et suscipit tincidunt. Suspendisse cursus molestie purus, vel bibendum erat dignissim ac. Nam luctus leo aliquet, condimentum tellus ut, accumsan tellus. Aliquam at commodo felis. Aliquam aliquam nibh a fermentum convallis. Fusce commodo ante et erat maximus, a rutrum neque cursus. Sed leo orci, auctor eget nibh ut, finibus auctor lectus. Praesent facilisis sem eros, sed pharetra arcu ultrices in. In eget porttitor metus. Pellentesque vulputate quis nisi vitae malesuada.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel semper lorem. Nam eleifend elit id risus vehicula, vel vehicula magna imperdiet."
        },
        {
            "id": 14,
            "title": "From API5",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt nibh et suscipit tincidunt. Suspendisse cursus molestie purus, vel bibendum erat dignissim ac. Nam luctus leo aliquet, condimentum tellus ut, accumsan tellus. Aliquam at commodo felis. Aliquam aliquam nibh a fermentum convallis. Fusce commodo ante et erat maximus, a rutrum neque cursus. Sed leo orci, auctor eget nibh ut, finibus auctor lectus. Praesent facilisis sem eros, sed pharetra arcu ultrices in. In eget porttitor metus. Pellentesque vulputate quis nisi vitae malesuada.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel semper lorem. Nam eleifend elit id risus vehicula, vel vehicula magna imperdiet."
        },
        {
            "id": 13,
            "title": "From API4",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt nibh et suscipit tincidunt. Suspendisse cursus molestie purus, vel bibendum erat dignissim ac. Nam luctus leo aliquet, condimentum tellus ut, accumsan tellus. Aliquam at commodo felis. Aliquam aliquam nibh a fermentum convallis. Fusce commodo ante et erat maximus, a rutrum neque cursus. Sed leo orci, auctor eget nibh ut, finibus auctor lectus. Praesent facilisis sem eros, sed pharetra arcu ultrices in. In eget porttitor metus. Pellentesque vulputate quis nisi vitae malesuada.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel semper lorem. Nam eleifend elit id risus vehicula, vel vehicula magna imperdiet."
        },
        {
            "id": 12,
            "title": "From API3",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt nibh et suscipit tincidunt. Suspendisse cursus molestie purus, vel bibendum erat dignissim ac. Nam luctus leo aliquet, condimentum tellus ut, accumsan tellus. Aliquam at commodo felis. Aliquam aliquam nibh a fermentum convallis. Fusce commodo ante et erat maximus, a rutrum neque cursus. Sed leo orci, auctor eget nibh ut, finibus auctor lectus. Praesent facilisis sem eros, sed pharetra arcu ultrices in. In eget porttitor metus. Pellentesque vulputate quis nisi vitae malesuada.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel semper lorem. Nam eleifend elit id risus vehicula, vel vehicula magna imperdiet."
        },
        {
            "id": 11,
            "title": "From API2",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt nibh et suscipit tincidunt. Suspendisse cursus molestie purus, vel bibendum erat dignissim ac. Nam luctus leo aliquet, condimentum tellus ut, accumsan tellus. Aliquam at commodo felis. Aliquam aliquam nibh a fermentum convallis. Fusce commodo ante et erat maximus, a rutrum neque cursus. Sed leo orci, auctor eget nibh ut, finibus auctor lectus. Praesent facilisis sem eros, sed pharetra arcu ultrices in. In eget porttitor metus. Pellentesque vulputate quis nisi vitae malesuada.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel semper lorem. Nam eleifend elit id risus vehicula, vel vehicula magna imperdiet."
        }
    ],
    "links": {
        "first": "http:\/\/practice.local\/api\/projects?page=1",
        "last": "http:\/\/practice.local\/api\/projects?page=3",
        "prev": null,
        "next": "http:\/\/practice.local\/api\/projects?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 3,
        "path": "http:\/\/practice.local\/api\/projects",
        "per_page": 5,
        "to": 5,
        "total": 13
    }
}
```

### HTTP Request
`GET api/projects`


<!-- END_893ae955e8991ef06f6de91adbff0aaa -->

<!-- START_d1a366aa47ee59c96780bfe89ca95bdd -->
## Create

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Store a newly created Project resource in storage.

> Example request:

```bash
curl -X POST "http://practice.local/api/projects" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU" \
    -d "title"="Project Title From API" \
    -d "description"="Random Text" \
    -d "start_date"="2018-12-25" \
    -d "end_date"="2019-05-25" \
    -d "estimated_completion_date"="2019-05-05" \
    -d "status"="Created" 
```

```javascript
const url = new URL("http://practice.local/api/projects");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "title": "Project Title From API",
    "description": "Random Text",
    "start_date": "2018-12-25",
    "end_date": "2019-05-25",
    "estimated_completion_date": "2019-05-05",
    "status": "Created",
})

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
    "data": [
        {
            "id": 13,
            "title": "From API5",
            "description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tincidunt nibh et suscipit tincidunt. Suspendisse cursus molestie purus, vel bibendum erat dignissim ac. Nam luctus leo aliquet, condimentum tellus ut, accumsan tellus. Aliquam at commodo felis. Aliquam aliquam nibh a fermentum convallis. Fusce commodo ante et erat maximus, a rutrum neque cursus. Sed leo orci, auctor eget nibh ut, finibus auctor lectus. Praesent facilisis sem eros, sed pharetra arcu ultrices in. In eget porttitor metus. Pellentesque vulputate quis nisi vitae malesuada.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec vel semper lorem. Nam eleifend elit id risus vehicula, vel vehicula magna imperdiet."
        }
    ]
}
```
> Example response (403):

```json
{
    "message": "Un Authenticated"
}
```
> Example response (500):

```json
{
    "title": [
        "The title has already been taken."
    ],
    "end_date": [
        "Project end date must be greater than project start date."
    ],
    "estimated_completion_date": [
        "Project estimated completion date must be greater than project start date."
    ]
}
```

### HTTP Request
`POST api/projects`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | Title of the Project.
    description | string |  required  | Description of the Project.
    start_date | string |  required  | Start date of the Project.
    end_date | string |  required  | End date of the Project.
    estimated_completion_date | string |  required  | Estimated completion date of the Project.
    status | string |  required  | Status of the Project.

<!-- END_d1a366aa47ee59c96780bfe89ca95bdd -->

<!-- START_62d96e2c27434ddb7c604817f783bed8 -->
## Details

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://practice.local/api/projects/{project}" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU"
```

```javascript
const url = new URL("http://practice.local/api/projects/{project}");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/projects/{project}`


<!-- END_62d96e2c27434ddb7c604817f783bed8 -->

<!-- START_1ca24c8d80ca22395fc07995d7929c34 -->
## Update

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://practice.local/api/projects/{project}" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU"
```

```javascript
const url = new URL("http://practice.local/api/projects/{project}");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`PUT api/projects/{project}`

`PATCH api/projects/{project}`


<!-- END_1ca24c8d80ca22395fc07995d7929c34 -->

<!-- START_70c859bdcb978e6cdba659235c2083d3 -->
## Delete

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>
Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://practice.local/api/projects/{project}" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU"
```

```javascript
const url = new URL("http://practice.local/api/projects/{project}");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`DELETE api/projects/{project}`


<!-- END_70c859bdcb978e6cdba659235c2083d3 -->

#general
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Handles Login Request for API

> Example request:

```bash
curl -X POST "http://practice.local/api/login" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU" \
    -d "email"="pm@mailinator.com" \
    -d "password"="123456" 
```

```javascript
const url = new URL("http://practice.local/api/login");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "email": "pm@mailinator.com",
    "password": "123456",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "error": "Un Authorised"
}
```

### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | string |  required  | Email address of the user
    password | string |  required  | Email address of the user

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Handles Registration Request

> Example request:

```bash
curl -X POST "http://practice.local/api/register" \
    -H "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU" \
    -d "Name"="API User" \
    -d "email"="user@mailinator.com" \
    -d "password"="123456" 
```

```javascript
const url = new URL("http://practice.local/api/register");

let headers = {
    "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImU4OWFiNDRjYzA2NTI1MTJiMGM2OTZjYmUxZjA3NmJiYTYzMDY4OTM4ODg4MGNjN2E4NGMzNDg5YzM4NDlhOTEzZTUwYmVhZmFjN2RiMmFlIn0.eyJhdWQiOiIxIiwianRpIjoiZTg5YWI0NGNjMDY1MjUxMmIwYzY5NmNiZTFmMDc2YmJhNjMwNjg5Mzg4ODgwY2M3YTg0YzM0ODljMzg0OWE5MTNlNTBiZWFmYWM3ZGIyYWUiLCJpYXQiOjE1NDU3MzUwNDgsIm5iZiI6MTU0NTczNTA0OCwiZXhwIjoxNTc3MjcxMDQ4LCJzdWIiOiIxMCIsInNjb3BlcyI6W119.ticHlXkJpP3H6HBnnIbamDndt24lTELZdV11eT_w2KpEvK9ijV7KwZJ0O734ipg6bxnxgmCwu9dg5pYe_05g0U9VajWnYKI2xJgA4TU0JBt78HyeTrd5djLaO3wmd3glhjoQj7hhaL9tMVW2AXj9m2QZMYYg_-K9exOzBCbxs1qwAAxroQKwGggn1edJ-oE86Cr7gnXZlj3S7n9qwjcQEWU4LnA1nXsbsdAEdpJkzv7MV0iBIMA-3Zgmc_7UYILTWzU6tS9fhEcjUNKSnYSLBhItf7EDcAlCn9FyeSlz9uEaH9c70aL8N0jeJh_1mr_EvN5qBu0B9UADnZWtYoaoajubf1CPRjykWnabwMHKGH3H85BeGDHGa5_m4KsqyQXVreBhhT7Mcc8jsJyvUNHHbGD9V7nom-_cyEsQ7H9CMI7RjcuRghhAurrKRQQTgLZ2thS6vxym5QK385IwkpI5yqfURMPOIqZNaLAMI5eNBxpooQz0sF62rGakCEUDEdQFzx2etxKOqLNv-6BBKAv56qeegbkYmpbcnAuNv9VEEapQ9GCWUp3vjjyTVjDNT8QbfzwqSdmLY1Vnh8UbeRtvs3Mjyy2URBK6D1T43AUkTsxKXxlxQWWE2b5PqmbqhFfeX9P8pIc2ZF-K1HKIAQ3kKAvqGALWngeXe-xu7URL_EU",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

let body = JSON.stringify({
    "Name": "API User",
    "email": "user@mailinator.com",
    "password": "123456",
})

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": [
            "The name field is required."
        ],
        "email": [
            "The email field is required."
        ],
        "password": [
            "The password field is required."
        ]
    }
}
```

### HTTP Request
`POST api/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    Name | string |  required  | Email address of the user
    email | string |  required  | Email address of the user
    password | string |  required  | Email address of the user

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->


