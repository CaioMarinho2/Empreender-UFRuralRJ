import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/react";
import { menuData  } from "../../utils/menuData";       
function Header(params) {
   

  return (
    <header >
        <nav>   
             {menuData.map((menu, index) => (
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
