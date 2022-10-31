# Creating-leads-deals

Для доступа к REST API Bitrix24 запросите у интегратора вебхук, или создайте его самостоятельно на своем портале в разделе Разработчикам-> Другое-> Входящий вебхук.
Если создаете вебхук самостоятельно выберите методы к которым у вебхука будет доступ. Для создания лидов и сделок потребуется доступ к методам [crm.deal.add](https://dev.1c-bitrix.ru/rest_help/crm/cdeals/crm_deal_add.php), [crm.lead.add](https://dev.1c-bitrix.ru/rest_help/crm/leads/crm_lead_add.php), [crm.contact.list](https://dev.1c-bitrix.ru/rest_help/crm/contacts/crm_contact_list.php) и [crm.contact.add](https://dev.1c-bitrix.ru/rest_help/crm/contacts/crm_contact_add.php).

Для вызова методов Rest API Bitrix24 можно использовать метод "call" класса CRest описанный в файле crest.php. Метод принимает в качестве первого аргумента строку - название вызываемого метода, например 'crm.lead.add', а вторым аргументом набор параметров описанных в документации. 

1) Перед созданием лида или сделки необходимо проверить существует ли в crm контакт с таким номером телефона или почтой.
Для этого используется метод [crm.contact.list](https://dev.1c-bitrix.ru/rest_help/crm/contacts/crm_contact_list.php) с фильтром (параметр FILTER) по указанному номеру телефона или email, если метод возвращает в ответе пустое поле result - контакта с такими данными в crm нет, иначе в поле result вернется контакт с указанным номером, вытаскиваем его ID для того чтобы дальше привязать сделку или лид к этой сущности
Пример кода в файле contactListExapmle.php

2) Если нужно создать сделку, но контакт был не найден - создаем его с помощью метода [crm.contact.add](https://dev.1c-bitrix.ru/rest_help/crm/contacts/crm_contact_add.php), необходимо передать параметр FIELDS в котором будут описаны необходимые поля ([Доступные поля](https://dev.1c-bitrix.ru/rest_help/crm/contacts/crm_contact_fields.php)), если вам нужно добавить пользовательское поле которого нет в документации - обратитесь к интегратору, он создаст необходимое поле и передаст вам его идентификатор.
Пример кода в файле addContactExapmle.php

3) 
