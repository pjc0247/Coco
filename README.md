Coco
====

PHP용 게임 서버 프레임워크


IN attributes
----
* __required__ : 항목이 필수임을 명시.
* __optional__ : 항목이 필수가 아님을 명시. (기본값)
* __as[name]__ : 이 항목의 값을 name 이름의 PHP변수로 가져온다.
* __pk[table,(column_name)]__ : 이 항목의 값이 table에서의 column_name에 대한 PK임을 명시하고, 해당 row를 가져온다. 
* __disable-autocommit__ : pk로 가져온 row가 autocommit 되는것을 방지.
* __va-rex[regex]__ : 항목의 값을 regex(정규식)으로 검증한다.
* __va-length[min,max]__ : 항목의 길이가 min~max 범위의 값인지 검증한다.
* __va-length[len]__ : 항목의 길이가 len인지 검증한다.
* __va-range[min,max]__ : 항목이 numeric값이고, min~max 범위의 값인지 검증한다.
* __session__ : 이 항목의 값은 세션으로부터 가져온다.
* __session_key__ : 이 항목이 session의 key가 됨을 명시.

OUT attributes
----
* __required__ : 항목이 필수임을 명시.
* __optional__ : 항목이 필수가 아님을 명시. (기본값)
* __timestamp__ : 타임스탬프 값을 대입.
* __session_key__ : session의 key값을 대입
* __from[name]__ : 이 항목의 값을 name이름을 가진 PHP 변수로부터 가져온다.
