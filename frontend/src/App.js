import { Outlet } from "react-router-dom";
import Footer from "./Components/Footer";
import Header from "./Components/Header";


function App() {
  return (
    <div className="container">

      <Header/>
      
        <Outlet />

      <Footer/>
      
    </div>
  );
}

export default App;
