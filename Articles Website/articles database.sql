-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 05:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `article` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `author` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `date`, `author`) VALUES
(4, 'SQL', 'SQL is a standard language for accessing and manipulating databases.\r\n\r\nWhat is SQL?\r\nSQL stands for Structured Query Language\r\nSQL lets you access and manipulate databases\r\nSQL became a standard of the American National Standards Institute (ANSI) in 1986, and of the International Organization for Standardization (ISO) in 1987\r\nWhat Can SQL do?\r\nSQL can execute queries against a database\r\nSQL can retrieve data from a database\r\nSQL can insert records in a database\r\nSQL can update records in a database\r\nSQL can delete records from a database\r\nSQL can create new databases\r\nSQL can create new tables in a database\r\nSQL can create stored procedures in a database\r\nSQL can create views in a database\r\nSQL can set permissions on tables, procedures, and views\r\n\r\nfrom W3School', '2021-08-05 05:52:02', 'Hassan'),
(5, 'PHP From Wikipedia', 'PHP is a general-purpose scripting language geared towards web development.[6] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[7] The PHP reference implementation is now produced by The PHP Group.[8] PHP originally stood for Personal Home Page,[7] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[9]\r\n\r\nPHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside of the web context, such as standalone graphical applications[10] and robotic drone control.[11] PHP code can also be directly executed from the command line.\r\n\r\nThe standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on almost every operating system and platform, free of charge.[12]\r\n\r\nThe PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard which other implementations aimed to follow. Since 2014, work has gone on to create a formal PHP specification.[13]\r\n\r\nW3Techs reports that, as of April 2021, \"PHP is used by 79.2% of all the websites whose server-side programming language we know.\"[14]', '2021-08-05 05:54:05', 'Hassan'),
(7, 'Java Syntax', 'Syntax\r\nMain article: Java syntax\r\n\r\nDependency graph of the Java Core classes (created with jdeps and Gephi)\r\nThe syntax of Java is largely influenced by C++ and C. Unlike C++, which combines the syntax for structured, generic, and object-oriented programming, Java was built almost exclusively as an object-oriented language.[18] All code is written inside classes, and every data item is an object, with the exception of the primitive data types, (i.e. integers, floating-point numbers, boolean values, and characters), which are not objects for performance reasons. Java reuses some popular aspects of C++ (such as the printf method).\r\n\r\nUnlike C++, Java does not support operator overloading[55] or multiple inheritance for classes, though multiple inheritance is supported for interfaces.[56]\r\n\r\nJava uses comments similar to those of C++. There are three different styles of comments: a single line style marked with two slashes (//), a multiple line style opened with /* and closed with */, and the Javadoc commenting style opened with /** and closed with */. The Javadoc style of commenting allows the user to run the Javadoc executable to create documentation for the program and can be read by some integrated development environments (IDEs) such as Eclipse to allow developers to access documentation within the IDE.\r\n\r\nHello world example\r\nThe traditional Hello world program can be written in Java as:[57]\r\n\r\npublic class HelloWorldApp {\r\n    public static void main(String[] args) {\r\n        System.out.println(\"Hello World!\"); // Prints the string to the console.\r\n    }\r\n}\r\nAll source files must be named after the public class they contain, appending the suffix .java, for example, HelloWorldApp.java. It must first be compiled into bytecode, using a Java compiler, producing a file with the .class suffix (HelloWorldApp.class, in this case). Only then can it be executed or launched. The Java source file may only contain one public class, but it can contain multiple classes with a non-public access modifier and any number of public inner classes. When the source file contains multiple classes, it is necessary to make one class (introduced by the class keyword) public (preceded by the public keyword) and name the source file with that public class name.\r\n\r\nA class that is not declared public may be stored in any .java file. The compiler will generate a class file for each class defined in the source file. The name of the class file is the name of the class, with .class appended. For class file generation, anonymous classes are treated as if their name were the concatenation of the name of their enclosing class, a $, and an integer.\r\n\r\nThe keyword public denotes that a method can be called from code in other classes, or that a class may be used by classes outside the class hierarchy. The class hierarchy is related to the name of the directory in which the .java file is located. This is called an access level modifier. Other access level modifiers include the keywords private (a method that can only be accessed in the same class) and protected (which allows code from the same package to access). If a piece of code attempts to access private methods or protected methods, the JVM will throw a SecurityException\r\n\r\nThe keyword static[19] in front of a method indicates a static method, which is associated only with the class and not with any specific instance of that class. Only static methods can be invoked without a reference to an object. Static methods cannot access any class members that are not also static. Methods that are not designated static are instance methods and require a specific instance of a class to operate.\r\n\r\nThe keyword void indicates that the main method does not return any value to the caller. If a Java program is to exit with an error code, it must call System.exit() explicitly.\r\n\r\nThe method name main is not a keyword in the Java language. It is simply the name of the method the Java launcher calls to pass control to the program. Java classes that run in managed environments such as applets and Enterprise JavaBeans do not use or need a main() method. A Java program may contain multiple classes that have main methods, which means that the VM needs to be explicitly told which class to launch from.\r\n\r\nThe main method must accept an array of String objects. By convention, it is referenced as args although any other legal identifier name can be used. Since Java 5, the main method can also use variable arguments, in the form of public static void main(String... args), allowing the main method to be invoked with an arbitrary number of String arguments. The effect of this alternate declaration is semantically identical (to the args parameter which is still an array of String objects), but it allows an alternative syntax for creating and passing the array.\r\n\r\nThe Java launcher launches Java by loading a given class (specified on the command line or as an attribute in a JAR) and starting its public static void main(String[]) method. Stand-alone programs must declare this method explicitly. The String[] args parameter is an array of String objects containing any arguments passed to the class. The parameters to main are often passed by means of a command line.\r\n\r\nPrinting is part of a Java standard library: The System class defines a public static field called out. The out object is an instance of the PrintStream class and provides many methods for printing data to standard out, including println(String) which also appends a new line to the passed string.\r\n\r\nThe string \"Hello World!\" is automatically converted to a String object by the compiler.\r\n\r\nExample with methods\r\n// This is an example of a single line comment using two slashes\r\n\r\n/*\r\n * This is an example of a multiple line comment using the slash and asterisk.\r\n * This type of comment can be used to hold a lot of information or deactivate\r\n * code, but it is very important to remember to close the comment.\r\n */\r\n\r\npackage fibsandlies;\r\n\r\nimport java.util.Map;\r\nimport java.util.HashMap;\r\n\r\n/**\r\n * This is an example of a Javadoc comment; Javadoc can compile documentation\r\n * from this text. Javadoc comments must immediately precede the class, method,\r\n * or field being documented.\r\n * @author Wikipedia Volunteers\r\n */\r\npublic class FibCalculator extends Fibonacci implements Calculator {\r\n    private static Map<Integer, Integer> memoized = new HashMap<>();\r\n\r\n    /*\r\n     * The main method written as follows is used by the JVM as a starting point\r\n     * for the program.\r\n     */\r\n    public static void main(String[] args) {\r\n        memoized.put(1, 1);\r\n        memoized.put(2, 1);\r\n        System.out.println(fibonacci(12)); // Get the 12th Fibonacci number and print to console\r\n    }\r\n\r\n    /**\r\n     * An example of a method written in Java, wrapped in a class.\r\n     * Given a non-negative number FIBINDEX, returns\r\n     * the Nth Fibonacci number, where N equals FIBINDEX.\r\n     * \r\n     * @param fibIndex The index of the Fibonacci number\r\n     * @return the Fibonacci number\r\n     */\r\n    public static int fibonacci(int fibIndex) {\r\n        if (memoized.containsKey(fibIndex)) return memoized.get(fibIndex);\r\n        else {\r\n            int answer = fibonacci(fibIndex - 1) + fibonacci(fibIndex - 2);\r\n            memoized.put(fibIndex, answer);\r\n            return answer;\r\n        }\r\n    }\r\n}\r\n\r\n\r\n\r\nForm Wikipedia', '2021-08-05 05:59:10', 'Hassan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
