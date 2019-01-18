<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<img src="tinker.JPG"/>
  <p>This is a UML class diagram for my tinker .org app. I'm gonna explain and illustrate its characteristics in building this system and would help me even find my way into actual program and make all these concepts easier to understand by representing it into Class Diagrams.
     Sir as you can see that my system has several class relationships so let's walk through a couple of them. We'll start with the User class it has got attributes for user ID, password, login status, and register date. I've got the different return types on the right of it, 
     and on the left, the visibility which are set to private. You can see how the values return by these attributes would specifically describe an instance of the User class. Down below I have a public method of verify login, returning to boolean. And these makes sense right?
     Methods are behaviors of a class. So if you were to login your user account, there's a function in place that verifies your login credentials. Moving on to the Customer class. This arrow tells that Customer class is a child of User. So Customer inherits all the attributes
     methods of the User class. And same thing for the  Admin class. Both of these inherit from User, but also have their own specific attributes and methods. Like Admin can update transaction, but Customer can't. Stemming from Customer, there are several lines with the closed-in 
     diamond. These are composition relationships which means that the parts cannot exist without the whole. If an instance of the Customer class, if that customer's account was destroyed, his Checklist would be destroyed and his transaction would be lost. They can't exist outside
     of the customer. The same applies for Event Info and Transaction Details class. If there is no transaction,there's not going to be any transaction details or event info. That last thing we'll look at in this Class Diagram is multiplicity. As you can see that a customer can have
     zero or many orders. You could create customer account for an online wedding and event planner application but never create transaction or  anything. Or you could be a frequent customer whom create and acquired several different events. And then flip side, an transaction can
     belong to only one customer. It'd be pretty confusing if a specific transaction with a unique transaction ID was duplicate across several different customers. And here you can see a one-to-one relationship. Each transaction has only one transaction details. And transaction details
     belongs to one and only one transaction. :) </p>
</body>
</html>
