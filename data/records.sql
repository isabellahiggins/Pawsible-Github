use Pawsible;

INSERT INTO user (userID, password, contactNo, fullName, dob) VALUES
(1, 'pawsLover1', '321-654-0987', 'Emily Davis', '1995-07-22'),
(2, 'Dogs22', '789-123-4560', 'Robert Johnson', '1988-03-14'),
(3, 'furryFriend99', '456-789-1230', 'Sophia Martinez', '1993-10-05');

INSERT INTO seller (sellerID) VALUES
(10),
(20),
(30);

INSERT INTO adoptionForm (adoptionID, fullName, address, contactNo, age, gender, petName, petType, sellerID) VALUES
(101, 'Daniel Carter', '101 Maple St, Blackrock', '333-444-5555', 27, 'Male', 'Luna', 'Dog', 10),
(102, 'Olivia Green', '202 Birch St, Cabra', '666-777-8888', 32, 'Female', 'Milo', 'Cat', 20),
(103, 'Benjamin White', '303 Cedar St, Finglas', '999-000-1111', 40, 'Male', 'Max', 'Rabbit', 30);

INSERT INTO pet (petID, name, breed, dob, sellerID) VALUES
(201, 'Luna', 'Labrador Retriever', '2021-02-15', 10),
(202, 'Milo', 'Persian', '2020-11-22', 20),
(203, 'Max', 'Holland Lop', '2019-08-30', 30);
