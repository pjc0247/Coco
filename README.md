Coco
====

PHP용 게임 서버 프레임워크


IN attributes
----
* required : 항목이 필수임을 명시.
* optional : 항목이 필수가 아님을 명시. (기본값)
* as[name] : 이 항목의 값을 name 이름의 PHP변수로 가져온다.
* pk[table,(column_name)] : 이 항목의 값이 table에서의 column_name에 대한 PK임을 명시하고, 해당 row를 가져온다. 
* disable-autocommit : pk로 가져온 row가 autocommit 되는것을 방지.
* va-rex[regex] : 항목의 값을 regex(정규식)으로 검증한다.
* va-length[min,max] : 항목의 길이가 min~max 범위의 값인지 검증한다.
* va-length[len] : 항목의 길이가 len인지 검증한다.
* va-range[min,max] : 항목이 numeric값이고, min~max 범위의 값인지 검증한다.
* session : 이 항목의 값은 세션으로부터 가져온다.
* session_key : 이 항목이 session의 key가 됨을 명시.

OUT attributes
----
* required : 항목이 필수임을 명시.
* optional : 항목이 필수가 아님을 명시. (기본값)
* timestamp : 타임스탬프 값을 대입.
* session_key : session의 key값을 대입
* from[name] : 이 항목의 값을 name이름을 가진 PHP 변수로부터 가져온다.
