/*
Title: ทดลอง feature ใหม่ของ PHP7: Scalar Type Declarations
Date: 2015/12/06
*/

ผมกะจะลองเขียน Feature ใหม่ของ PHP 7 ไปทีละอย่าง


	function replace_a(string $s) {
		return preg_replace("/A+/i", 'xxx', $s);
	}
	echo replace_a(20);


ประเด็นแรกที่จะดูเลยก็คือมันระบุ type ได้แล้วครับ แต่ว่าลองเขียนแบบข้างบน นึกว่าจะรันไม่ได้ เพราะว่า 20 มันไม่ใช่ string พอใช้จริง ๆ ก็ทำงานปกติไม่มีแม้แต่ warning

พอไปอ่านดูคือมันมี 2 mode ได้แก่ coercive กับ strict โดยที่ default คือ coercive ผมเดา ๆ เอาว่า coercive นี่คือมันจะแปลงให้อัตโนมัติมั้ง เช่น ใส่ 20 ไปมันก็คงแปลงเป็น "20" ที่เป็น string ให้ 


	declare(strict_types=1);
	function replace_a(string $s) {
		return preg_replace("/A+/i", 'xxx', $s);
	}
	echo replace_a(20);


แต่พอเติม strict_types=1 ไปก็เป็นแบบที่คาดแล้วได้ error แบบนี้ออก 


    Fatal error: Uncaught TypeError: Argument 1 passed to replace_a() must be of the type string, integer given, called in /home/vee/Develop/exper/php7/type_dec.php on line 9 and defined in /home/vee/Develop/exper/php7/type_dec.php:4
    Stack trace:
    #0 /home/vee/Develop/exper/php7/type_dec.php(9): replace_a(20)
    #1 {main}
    thrown in /home/vee/Develop/exper/php7/type_dec.php on line 4

  
พอเข้าใจมากขึ้น แต่ก็ยังแอบงง ๆ coercive mode นี้มีประโยชน์ตอนไหนอย่างไร

## อ้างอิง
* [http://php.net/manual/en/migration70.new-features.php](http://php.net/manual/en/migration70.new-features.php)
* [https://github.com/tpunt/PHP7-Reference](https://github.com/tpunt/PHP7-Reference)
