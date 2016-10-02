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

@Path("cities")
public class CityService {	

	@GET
	@Produces(MediaType.TEXT_PLAIN)
	public String getIt() {

		List<HashMap<String, Object>> cityList = getAllCities();
		JSONArray list = new JSONArray();
		for(HashMap<String, Object> city : cityList){
			JSONObject obj = new JSONObject();
			for(Map.Entry<String, Object> entry : city.entrySet()){
				obj.put(entry.getKey().toString(), entry.getValue().toString());
			}
			list.add(obj);
		}
		return list.toJSONString();
	}

	@POST
	@Path("/add/{param}")
	public Response postCityData(@PathParam("param") String msg) {
		JSONParser parser = new JSONParser();

		Object obj=null;
		try {
			obj = parser.parse(msg);
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

		JSONObject jsonObject = (JSONObject) obj;

		City city = new City();
		city.setCityName(jsonObject.get("CityName").toString());
		city.setDescription(jsonObject.get("Description").toString());
		city.setRelatedLinks(jsonObject.get("RelatedLinks").toString());
		city.setImgUrl(jsonObject.get("ImgURL").toString());
		city.setIdAdmins(jsonObject.get("contact info").toString());
		addCity(city); // Add validation
		String output = "POST: " + "SUCCESS";
		return Response.status(200).entity(output).build();
	}


	public static void main(String[] args) {
		CityService service = new CityService();
		City city = new City();
		city.setCityName("cityname");
		city.setDescription("description");
		city.setRelatedLinks("relatedlinks");
		city.setImgUrl("imgurl");
		city.setIdAdmins("contact info");
		service.addCity(city);
	}
	public List<HashMap<String, Object>> getAllCities(){
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
			ResultSet rs = stmt.executeQuery("SELECT * FROM CITIES");
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


	public void addCity(City city){
		String url = "jdbc:mysql://localhost:3306/javabase";
		String username = "java";
		String password = "password";

		System.out.println("Connecting database...");

		try (java.sql.Connection connection = DriverManager.getConnection(url, username, password)) {
			System.out.println("Database connected!");
			PreparedStatement pstmt = connection.prepareStatement("INSERT INTO cities VALUES (?,?,?,?,?,(SELECT id from admins WHERE contacts=?))");
			pstmt.setInt(1, 0);
			pstmt.setString(2, city.getCityName());
			pstmt.setString(3, city.getDescription());
			pstmt.setString(4, city.getRelatedLinks());
			pstmt.setString(5, city.getImgUrl());
			pstmt.setString(6, city.getIdAdmins());
			pstmt.executeUpdate();
			pstmt.close();
			connection.close();
		} catch (SQLException e) {
			throw new IllegalStateException("Cannot connect the database!", e);
		}
	}
	


}