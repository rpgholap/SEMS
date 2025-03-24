@WebServlet("/register-servlet")
public class RegistrationServlet extends HttpServlet {
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        String name = request.getParameter("name");
        String email = request.getParameter("email");

        // Perform user registration logic and database operations here.

        // Send a response back to the AngularJS app.
        response.setContentType("application/json");
        PrintWriter out = response.getWriter();
        out.print("{\"success\": true, \"message\": \"Registration successful\"}");
        out.flush();
    }
}
