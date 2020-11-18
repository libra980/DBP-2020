2# DBP_2020
review for database programming


## ❤배운내용
### 트랜잭션의 성질 4가지  
원자성, 일관성, 독립성, 지속성
### 트랜잭션에서 commit 하면 rollback 안됨
### 자바에서 db로 쿼리문을 전송할 때 사용할 수 있는 인터페이스 3가지  
Statement, PreparedStatement, CallableStatement  
사용할 때 반드시 try-catch문 or throws 처리를 해야 함.
Statement 에서 개선한게 PreparedStatement임  
(미리 컴파일해서 수행시간이 빠름, 동적으로 진행 가능, 기호에 상관없이 SQL 문 사용 가능)

## ❤문제 발생/ 해결과정
이클립스에서 run했을 시 오류 내용이 나오지 않고, 원하는 내용이 출력되지 않았다.  
오라클에서 rollback-commit 하고 다시 실행하니 원하는 내용이 출력됨.

## ❤ 회고
(+) rollback과 commit에 대해 다시 공부할 수 있어서 좋았다.
(-) 코드에 오탈자가 있는지 잘 확인해야 한다.  
(!) 중복되는 부분을 하나의 메서드로 만들어야 보기좋다.
