<!-- LẬP TRÌNH HƯỚNG ĐỐI TƯỢNG (OOP) --> ----------------------------------

1.  Class and Object

    - Thuộc tính là gí?
      - thông tin, tính chất của đối tượng
      - Biến được khai báo trong class có kèm theo cơ chế
      - Ex: public $name,...
    - Cơ chế?(phạm vi truy cập của 1 thuộc tính, phương thức)
      - là phạm vi truy cập của thuộc tính, phương thức
      - public - cho phép truy cập ở mọi nơi( trong class, ngoài class, class kế thừa)
      - protected - cho phép truy cập (trong class, class kế thừa)
      - private - chỉ cho phép truy cập trong class
    - Phương thứ : là hàm được khai báo trong class có kèm theo cơ chế

2.  Kế thừa - "extends"

    - Cho phép class con (class kế thừa) sửa dụng lại toàn bộ thuộc tính và phương thức của lớp cha (public, protected)

3.  Override (ghi đè dữ liệu) - Tính đa hình

    - Chống ghi đè - parent

4.  Hằng số - const hay define (duy nhất không ghi đè)

    - lợi ích không cần tạo đối tượng, giảm tải bộ nhớ, tăng tốc độ,...

5.  Thuộc tính tĩnh và phương thức tĩnh - static

    - thuộc tính tĩnh là biến được khai báo trong class kèm theo từ khóa static
    - phương thức tĩnh là hàm được khai báo trong class kèm theo từ khóa static

6.  Final

    - Chống ghi đè dữ liệu
    - Chống kế thừa

7.  clone

    - tạo ra đối tượng mói từ đối tượng cũ nhưng ko làm ảnh hưởng đến đối tượng cũ

8.  Construct and Destruct (magic method)

    - Magic methods: những phương thức rất đặc biệc trong PHP vì nhiệm vụ của nó là bắt một sự kiện (event) nào đó khi chúng ta thao tác tới đối tượng.
    - Thông thường mỗi magic method sẽ được kích hoạt (trigger) ở một sự kiện nào đó mà ta tác động vào đối tượng. Và vì nó có tính đặc biệt nên bạn dễ dàng nhận biết nó qua hai dấu gạch dưới (\_\_), nghĩa là tất cả các phương thức Magic methods đều có tên bắt đầu bằng hai dấu gạch dưới.

    - Hàm khởi tạo và hàm hủy (không có công dụng tạo và hủy nhưng lợi dụng cơ chế hoạt động)
    - Construct: được chạy ngay khi đối tượng được khởi tạo từ class. chạy đầu tiên (hàm có tên giống class)
    - Destruct: được chạy ngay khi đối tượng được khởi tạo từ class. chạy cuối cùng

9.  Abstract (trừu tượng) - bản chất là kế thừa

    - class abstract có phương thức abstract thì class được kế thừa phải định nghĩa lại phương thức abstract đó

10. interface

    - Bản chất là kế thừa, tạo ra các tính năng mà chúng ta sử dụng ở bất kỳ class nào

11. get and set (magic method)

    - get: lấy ra, set: thiết lập
    - why? đôi lúc ta muốn nó là private nhưng vẫn sử dụng được nó thì đòi hỏi ta phải truy xuất thông qua một function trung gian, và function trung gian này ta gọi là set và get.
    - Trong PHP có cung cấp cho chúng ta hai hàm đặc biệt thuộc Magic methods đó là (\_\_set) và (\_\_get). Hai hàm này sẽ tự động gọi khi bạn truy xuất hay gán đến một thuộc tính trong lớp.

12. call and callStatic (magic method)

    - \_\_call() : hàm call, được gọi khi ta gọi đến một phương thức không tồn tại trong đối tượng

    - \_\_callStatic() : hàm call static, được gọi khi ta gọi đến một phương thức tĩnh không tồn tại trong đối tượng

13. sleep and wakeup (magic method)

    - \_\_sleep() : xác nhận dữ liệu đang chờ xử lý hoặc thực hiện các tác vụ dọn dẹp tương tự. Ngoài ra, chức năng này rất hữu ích nếu một đối tượng rất lớn không cần phải được lưu hoàn toàn.

    - \_\_wakeup() : để thiết lập lại bất kỳ kết nối cơ sở dữ liệu nào có thể đã bị mất trong quá trình tuần tự hóa và thực hiện các tác vụ khởi động lại khác.

14. isset and unset (magic method)

    - \_\_isset() : được kích hoạt bằng cách gọi Isset () hoặc empty () trên các thuộc tính không thể truy cập (được bảo vệ hoặc riêng tư) hoặc không tồn tại.

    - \_\_unset() : được gọi khi unset () được sử dụng trên các thuộc tính không thể truy cập (được bảo vệ hoặc riêng tư) hoặc không tồn tại.

15. toString() (magic method)

    - \_\_toString() : cho phép một lớp quyết định cách nó sẽ phản ứng khi nó được coi như một chuỗi.

16. invoke (magic method)

    - \_\_invoke() : được gọi khi một tập lệnh cố gắng gọi một đối tượng dưới dạng một hàm.

17. set state (magic method)

    - \_\_set_state() : Đây phương pháp tĩnh được gọi là cho các lớp xuất khẩu bởi var_export () .

18. clone (magic method)

    - \_\_clone() : Khi quá trình nhân bản hoàn tất, nếu phương thức \_\_clone () được xác định, thì phương thức \_\_clone () của đối tượng mới được tạo sẽ được gọi, để cho phép bất kỳ thuộc tính cần thiết nào cần được thay đổi.

19. debugInfo (magic method)

    - \_\_debugInfo() : Phương thức này được gọi bởi var_dump () khi kết xuất một đối tượng để lấy các thuộc tính cần được hiển thị. Nếu phương thức không được xác định trên một đối tượng, thì tất cả các thuộc tính công khai, được bảo vệ và riêng tư sẽ được hiển thị.

20. traits

    - Traits được sử dụng để khai báo các phương thức có thể được sử dụng trong nhiều class.

    - Traits có thể được hiểu như là một class, giúp tập hợp một nhóm phương thức mà chúng ta muốn sử dụng trong một class khác., nó không thể được khởi tạo, thay vào đó chúng ta sử dụng từ khóa use.

21. namespace and use

    - Namespace giúp tạo ra một không gian tên cho hàm và lớp trong lập trình nói chung và trong PHP nói riêng.

      21.1 Để khai báo namespace trong PHP chú ta sử dụng cú pháp sau:

      - Chú ý: khi khai báo namespace thì chúng ta phải đặt nó ở phía trên cùng của file.
        ex: namespace Name;

        21.2 Gọi namespace.

            - Khi mà một class đã được một namespace định danh thì bạn sẽ không thể gọi theo cách thông thường được nữa mà phải gọi với cú pháp:
               ex: new tenNamespace\tenClass();

            - Nếu như bạn không muốn gọi namespace theo cách trên thì bạn sử dụng từ khóa use để nạp theo cú pháp sau:
            - Chú ý: Khai báo nạp namespace cũng phải được đặt trên đầu của một file, nếu như trong một file có sử dụng namespace và use thì use sẽ được đặt dưới namespace.
               ex: use tenNamespace\tenClass;

        21.3 Định danh cho namespace.

                ex:use tenNamespace as tenMoi;

        21.4 Nhiều namespace trong một file.
