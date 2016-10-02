package com.example.simple_service_webapp;

//@XmlRootElement
public class MyJaxbBean {
    public String name;
    public int age;
 
    public MyJaxbBean() {} // JAXB needs this
 
    public MyJaxbBean(String name, int age) {
        this.name = name;
        this.age = age;
    }

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	public int getAge() {
		return age;
	}

	public void setAge(int age) {
		this.age = age;
	}
    
    
}
