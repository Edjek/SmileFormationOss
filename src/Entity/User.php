<?php

namespace SmileOSS\Lab\OOP\Entity;

class User
{
    /**
    * @var string
    */
    private $userName;

    /**
    * @var string
    */
    private $password;

    /**
    * @var string
    */
    private $role;
    
    /**
    * @var string
    */
    private $firstName;

    /**
    * @var string
    */
    private $lastName;
    
    /**
    * @var string
    */
    private $email;

    /**
    * @var string
    */
    private $phone;

    /**
    * @var Course[]
    */
    private $coursesSubscribed = [];
    
    /**
    * @var Course[]
    */
    private $coursesTeached;
    
    /**
    * @return string
    */
    public function getUserName()
    {
        return $this->userName;
    }
    
    /**
    * @param string $userName
    */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
    
    /**
    * @return string
    */
    public function getPassword()
    {
        return $this->password;        
    }
    
    /**
    * @param string $password
    */
    public function setPassword($password)
    {
        $this->password = $password;
    }
    
    /**
    * @return string
    */
    public function getRole()
    {
        return $this->role;        
    }
    
    /**
    * @param string $role
    */
    public function setRole($role)
    {
        $this->role = $role;
    }
    
    /**
    * @return string
    */
    public function getFirstName()
    {
        return $this->firstName;        
    }
    
    /**
    * @param string $firstName
    */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    
    /**
    * @return string
    */
    public function getLastName()
    {
        return $this->lastName;        
    }
    
    /**
    * @param string $lastName
    */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    
    /**
    * @return string
    */
    public function getEmail()
    {
        return $this->email;        
    }
    
    /**
    * @param string $email
    */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
    * @return string
    */
    public function getPhone()
    {
        return $this->phone;        
    }
    
    /**
    * @param string $phone
    */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
    * @return arraCourse[]y
    */
    public function getCoursesSubscribed()
    {
        return $this->coursesSubscribed;        
    }
    
    /**
    * @param $coursesSubscribed
    */
    public function addCoursesSubscribed($coursesSubscribed)
    {
        $this->coursesSubscribed[] = $coursesSubscribed;
    }
       
    /**
    * @param $coursesSubscribed
    */
    public function removeCoursesSubscribed($courseUnsubscribed)
    {
        foreach ($this->coursesSubscribed as $courseSubscribed) {
            if ($courseSubscribed == $courseUnsubscribed) {
                unset($this->coursesSubscribed[$courseUnsubscribed]);
            }
        }
    }
    
    /**
    * @return array
    */
    public function getCoursesTeached()
    {
        return $this->coursesTeached;        
    }
}
