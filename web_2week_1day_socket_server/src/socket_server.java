import java.util.Scanner;
import java.io.InputStream;
import java.io.OutputStream;
import java.io.BufferedReader;
import java.io.DataInputStream;
import java.io.DataOutputStream;
import java.net.ServerSocket;
import java.net.Socket;
import java.io.FileReader;

public class socket_server {

	public static void main(String[] args) throws Exception {
		String header = "HTTP/1.1 200 OK\n" +
				"\n" +
				"";
		Scanner sc = new Scanner(System.in);
		
		System.out.println("What do you want to share? >>");
		String path = sc.nextLine();
		System.out.println("Your ip: ");
		String host = sc.nextLine();
		System.out.println("port: ");
		int port = sc.nextInt();
		
		ServerSocket server_socket = new ServerSocket(port);
		System.out.println("created server");
				
		Socket client_socket = server_socket.accept();  
		System.out.println("connection from: " + client_socket.toString());
		
		 
		InputStream is = client_socket.getInputStream();
		DataInputStream dis = new DataInputStream(is);
		System.out.println("from connected user: " + dis.read());
		
		BufferedReader read = new BufferedReader(new FileReader(path));
		
		String result = "";
		while(true) {
			String line = read.readLine();
			if(line==null) break;
			result = line.concat(line);
		}
		
		String data = new String(header + result);
		
		System.out.println(data);
		
		OutputStream os = client_socket.getOutputStream();
        DataOutputStream dos = new DataOutputStream(os);
        dos.writeUTF(data);
        dos.flush();
        
        dos.close();
        os.close();
		client_socket.close();
		server_socket.close();
	}

}
