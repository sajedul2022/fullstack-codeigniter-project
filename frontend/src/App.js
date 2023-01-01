import { BrowserRouter, Routes, Route } from "react-router-dom";
// import './App.css';

import ProductList from "./components/ProductList";
// import AddProduct from "./components/AddProduct";
// import EditProduct from "./components/EditProduct";
 
function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route  path="/" element={<ProductList />}>

          {/* <Route index element={<ProductList />} /> */}

          {/* <Route path="/about" element={<About />} /> */}
          
        </Route>
      </Routes>
    </BrowserRouter>
  );
}
 
export default App;
 