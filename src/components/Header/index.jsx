import "./index.css";
import logo from "../../assets/EmpreenderLogo.jpeg";
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/react";
import { menuHeaderData  } from "../../utils/menuHeaderData";       
function Header(params) {
   

  return (
    <header >
      <img src={logo} alt="Logotipo do Empreender UFRRJ com um foguete estilizado dentro de um círculo laranja" />
        <nav>   
             {menuHeaderData.map((menu, index) => (
          <Menu
            as="div"
            key={index}
            onMouseEnter={(e) => e.currentTarget.querySelector("button")?.click()}
            onMouseLeave={(e) => e.currentTarget.querySelector("button")?.click()}
          >
            <MenuButton>{menu.title}</MenuButton>
            
          </Menu>
        ))}
        </nav>
    </header>
  );
}
export default Header;
