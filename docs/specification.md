# Описание сервиса "LaravelTaskExample"

## Тип Manager

| Имя           |  Тип   | Обяз. | Описание                |
|---------------|:------:|:-----:|-------------------------|
| **id**        | bigint |   О   | Идентификатор менеджера |
| **full_name** | string |   О   | Полное имя менеджера    |

---

# API

## /rpc/orders

Регистрация заказа в системе

### Входные параметры

| Имя       | Тип | Обяз. | Описание                                                                                                                                                    |
|-----------|:---:|:-----:|-------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **limit** | int |   Н   | Максимальное количество заказов, которые необходимо вернуть в ответе. Если не указано, возвращаются все доступные заказы. Принимает целочисленное значение. |

Пример запроса:

```json
{
  "jsonrpc": "2.0",
  "method": "order@get",
  "params": {
    "limit": 50
  },
  "id": 1
}
```

### Результат

| Имя            |           Тип           | Обяз. | Описание                |
|----------------|:-----------------------:|:-----:|-------------------------|
| **id**         |         bigint          |   О   | Идентификатор заказа    |
| **manager_id** |         bigint          |   О   | Идентификатор менеджера |
| **Manager**    | [Manager](#тип-manager) |   О   | Объект менеджера        |

Пример ответа:

<details>
  <summary>Раскройте чтобы посмотреть</summary>

```json
{
  "id": "1",
  "result": [
    {
      "id": 101,
      "manager_id": 151,
      "manager": {
        "id": 151,
        "fullName": "Исаева Эльвира"
      }
    },
    {
      "id": 102,
      "manager_id": 152,
      "manager": {
        "id": 152,
        "fullName": "Шаров Рената"
      }
    },
    {
      "id": 103,
      "manager_id": 153,
      "manager": {
        "id": 153,
        "fullName": "Шаров Рената"
      }
    },
    {
      "id": 104,
      "manager_id": 154,
      "manager": {
        "id": 154,
        "fullName": "Красильников Евгения"
      }
    },
    {
      "id": 105,
      "manager_id": 155,
      "manager": {
        "id": 155,
        "fullName": "Мухин Адам"
      }
    },
    {
      "id": 106,
      "manager_id": 156,
      "manager": {
        "id": 156,
        "fullName": "Гусева Анна"
      }
    },
    {
      "id": 107,
      "manager_id": 157,
      "manager": {
        "id": 157,
        "fullName": "Самсонова Артур"
      }
    },
    {
      "id": 108,
      "manager_id": 158,
      "manager": {
        "id": 158,
        "fullName": "Карпова Дина"
      }
    },
    {
      "id": 109,
      "manager_id": 159,
      "manager": {
        "id": 159,
        "fullName": "Мясникова Анфиса"
      }
    },
    {
      "id": 110,
      "manager_id": 160,
      "manager": {
        "id": 160,
        "fullName": "Быков Марина"
      }
    },
    {
      "id": 111,
      "manager_id": 161,
      "manager": {
        "id": 161,
        "fullName": "Рожкова Иван"
      }
    },
    {
      "id": 112,
      "manager_id": 162,
      "manager": {
        "id": 162,
        "fullName": "Соколов Изабелла"
      }
    },
    {
      "id": 113,
      "manager_id": 163,
      "manager": {
        "id": 163,
        "fullName": "Орлова Степан"
      }
    },
    {
      "id": 114,
      "manager_id": 164,
      "manager": {
        "id": 164,
        "fullName": "Кабанова Лада"
      }
    },
    {
      "id": 115,
      "manager_id": 165,
      "manager": {
        "id": 165,
        "fullName": "Абрамов Владимир"
      }
    },
    {
      "id": 116,
      "manager_id": 166,
      "manager": {
        "id": 166,
        "fullName": "Иванова Кузьма"
      }
    },
    {
      "id": 117,
      "manager_id": 167,
      "manager": {
        "id": 167,
        "fullName": "Мартынова Платон"
      }
    },
    {
      "id": 118,
      "manager_id": 168,
      "manager": {
        "id": 168,
        "fullName": "Суханов Ева"
      }
    },
    {
      "id": 119,
      "manager_id": 169,
      "manager": {
        "id": 169,
        "fullName": "Ефремов Алёна"
      }
    },
    {
      "id": 120,
      "manager_id": 170,
      "manager": {
        "id": 170,
        "fullName": "Мясникова Лев"
      }
    },
    {
      "id": 121,
      "manager_id": 171,
      "manager": {
        "id": 171,
        "fullName": "Борисова Артемий"
      }
    },
    {
      "id": 122,
      "manager_id": 172,
      "manager": {
        "id": 172,
        "fullName": "Королёва Эдуард"
      }
    },
    {
      "id": 123,
      "manager_id": 173,
      "manager": {
        "id": 173,
        "fullName": "Блохин Всеволод"
      }
    },
    {
      "id": 124,
      "manager_id": 174,
      "manager": {
        "id": 174,
        "fullName": "Буров Жанна"
      }
    },
    {
      "id": 125,
      "manager_id": 175,
      "manager": {
        "id": 175,
        "fullName": "Соловьёва Валентина"
      }
    },
    {
      "id": 126,
      "manager_id": 176,
      "manager": {
        "id": 176,
        "fullName": "Маслова Инесса"
      }
    },
    {
      "id": 127,
      "manager_id": 177,
      "manager": {
        "id": 177,
        "fullName": "Тимофеев Дарья"
      }
    },
    {
      "id": 128,
      "manager_id": 178,
      "manager": {
        "id": 178,
        "fullName": "Филатова Мальвина"
      }
    },
    {
      "id": 129,
      "manager_id": 179,
      "manager": {
        "id": 179,
        "fullName": "Бобылёва Захар"
      }
    },
    {
      "id": 130,
      "manager_id": 180,
      "manager": {
        "id": 180,
        "fullName": "Макарова Валентин"
      }
    },
    {
      "id": 131,
      "manager_id": 181,
      "manager": {
        "id": 181,
        "fullName": "Исакова Дина"
      }
    },
    {
      "id": 132,
      "manager_id": 182,
      "manager": {
        "id": 182,
        "fullName": "Кузнецов Лев"
      }
    },
    {
      "id": 133,
      "manager_id": 183,
      "manager": {
        "id": 183,
        "fullName": "Бобылёв Платон"
      }
    },
    {
      "id": 134,
      "manager_id": 184,
      "manager": {
        "id": 184,
        "fullName": "Зиновьева Зоя"
      }
    },
    {
      "id": 135,
      "manager_id": 185,
      "manager": {
        "id": 185,
        "fullName": "Крылов Адам"
      }
    },
    {
      "id": 136,
      "manager_id": 186,
      "manager": {
        "id": 186,
        "fullName": "Анисимова Анфиса"
      }
    },
    {
      "id": 137,
      "manager_id": 187,
      "manager": {
        "id": 187,
        "fullName": "Котова Мирослав"
      }
    },
    {
      "id": 138,
      "manager_id": 188,
      "manager": {
        "id": 188,
        "fullName": "Муравьёв Давид"
      }
    },
    {
      "id": 139,
      "manager_id": 189,
      "manager": {
        "id": 189,
        "fullName": "Калашникова Адам"
      }
    },
    {
      "id": 140,
      "manager_id": 190,
      "manager": {
        "id": 190,
        "fullName": "Лыткин Мальвина"
      }
    },
    {
      "id": 141,
      "manager_id": 191,
      "manager": {
        "id": 191,
        "fullName": "Некрасов Тамара"
      }
    },
    {
      "id": 142,
      "manager_id": 192,
      "manager": {
        "id": 192,
        "fullName": "Осипова Богдан"
      }
    },
    {
      "id": 143,
      "manager_id": 193,
      "manager": {
        "id": 193,
        "fullName": "Зуева Стефан"
      }
    },
    {
      "id": 144,
      "manager_id": 194,
      "manager": {
        "id": 194,
        "fullName": "Гордеева Капитолина"
      }
    },
    {
      "id": 145,
      "manager_id": 195,
      "manager": {
        "id": 195,
        "fullName": "Евсеев Витольд"
      }
    },
    {
      "id": 146,
      "manager_id": 196,
      "manager": {
        "id": 196,
        "fullName": "Родионова Капитолина"
      }
    },
    {
      "id": 147,
      "manager_id": 197,
      "manager": {
        "id": 197,
        "fullName": "Фролова Лада"
      }
    },
    {
      "id": 148,
      "manager_id": 198,
      "manager": {
        "id": 198,
        "fullName": "Владимиров Зинаида"
      }
    },
    {
      "id": 149,
      "manager_id": 199,
      "manager": {
        "id": 199,
        "fullName": "Селиверстова Мальвина"
      }
    },
    {
      "id": 150,
      "manager_id": 200,
      "manager": {
        "id": 200,
        "fullName": "Орехов Богдан"
      }
    }
  ],
  "jsonrpc": "2.0"
}
```
</details>
