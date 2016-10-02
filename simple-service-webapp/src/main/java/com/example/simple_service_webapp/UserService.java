package com.example.simple_service_webapp;

import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.ResultSetMetaData;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;
import org.json.simple.parser.ParseException;

@Path("user")
public class UserService {
	
	@GET
	@Path("/{param}")
	@Produces(MediaType.TEXT_PLAIN)
	public String getIt(@PathParam("param") String userId) {
		List<HashMap<String, Object>> userList = getUser(userId);
		JSONArray list = new JSONArray();
		for(HashMap<String, Object> user : userList){
			JSONObject obj = new JSONObject();
			for(Map.Entry<String, Object> entry : user.entrySet()){
				obj.put(entry.getKey().toString(), entry.getValue().toString());
			}
			list.add(obj);
		}
		return list.toJSONString();
	}
	
	@POST
	@Path("/add/{param}")
	public Response postUserData(@PathParam("param") String msg) {
		JSONParser parser = new JSONParser();

		Object obj=null;
		try {
			obj = parser.parse(msg);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		JSONObject jsonObject = (JSONObject) obj;

		User user = new User();
		user.setUsername(jsonObject.get("username").toString());
		user.setEmailId(jsonObject.get("emailId").toString());
		user.setFirstName(jsonObject.get("firstName").toString());
		user.setLastName(jsonObject.get("lastName").toString());
		user.setSummary(jsonObject.get("summary").toString());
		user.setSkills(jsonObject.get("skills").toString());
		user.setInterests(jsonObject.get("interests").toString());
		user.setImageURL(jsonObject.get("imageURL").toString());
		user.setIdUserType(jsonObject.get("idUserType").toString());
		user.setIdCities(jsonObject.get("idCities").toString());
		addUser(user); // Add validation
		String output = "POST: " + "SUCCESS";
		return Response.status(200).entity(output).build();
	}
	
	public void addUser(User user){
		String url = "jdbc:mysql://localhost:3306/javabase";
		String username = "java";
		String password = "password";

		System.out.println("Connecting database...");

		try (java.sql.Connection connection = DriverManager.getConnection(url, username, password)) {
			System.out.println("Database connected!");
			PreparedStatement pstmt = connection.prepareStatement("INSERT INTO individual VALUES (?,?,?,?,?,?,?,?,?,(SELECT id from UserType WHERE type=?),(SELECT id FROM Cities WHERE cityName=?))");
			pstmt.setInt(1, 0);
			pstmt.setString(2, user.getUsername());
			pstmt.setString(2, user.getEmailId());
			pstmt.setString(2, user.getFirstName());
			pstmt.setString(2, user.getLastName());
			pstmt.setString(2, user.getSummary());
			pstmt.setString(2, user.getSkills());
			pstmt.setString(2, user.getInterests());
			pstmt.setString(2, user.getImageURL());
			pstmt.setString(2, user.getIdUserType());
			pstmt.setString(2, user.getIdCities());
			pstmt.executeUpdate();
			pstmt.close();
			connection.close();
		} catch (SQLException e) {
			throw new IllegalStateException("Cannot connect the database!", e);
		}
	}
	
	public List<HashMap<String, Object>> getUser(String userId){
		List<HashMap<String, Object>> list = new ArrayList<>();
		String url = "jdbc:mysql://localhost:3306/javabase";
		String username = "java";
		String password = "password";

		try {
			Class.forName("com.mysql.jdbc.Driver");
		} 
		catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} 


		System.out.println("Connecting database...");

		try (java.sql.Connection connection = DriverManager.getConnection(url, username, password)) {
			System.out.println("Database connected!");
			Statement stmt = connection.createStatement();
			ResultSet rs = stmt.executeQuery("SELECT * FROM INDIVIDUAL WHERE id=" + userId);
			ResultSetMetaData md = rs.getMetaData();
			int columns = md.getColumnCount();
			while (rs.next()){
				HashMap<String, Object> row = new HashMap<>(columns);
				for(int i=1; i<=columns; ++i){           
					row.put(md.getColumnName(i),rs.getObject(i));
				}
				list.add(row);		
			}
			rs.close();
			stmt.close();
			connection.close();
		} catch (SQLException e) {
			throw new IllegalStateException("Cannot connect the database!", e);
		}
		return list;
	}
}
