# Pagination with "Items per Page" Feature

This project demonstrates the implementation of pagination in Laravel using Livewire. It includes a customizable "Items per page" dropdown to control how many items are displayed on each page.

## Features
- Display items with pagination.
- Allow users to select the number of items displayed per page ("Items per page").
- Optimized to handle large datasets efficiently.

---

## Files Overview

### 1. **Item.php** (Model)
- Defines the `Item` model.
- Allows mass assignment for the `name` field.

### 2. **2021_01_01_000000_create_items_table.php** (Migration)
- Creates the `items` table with columns:
  - `id`: Primary key.
  - `name`: Name of the item.
  - Timestamps.

### 3. **ItemsTableSeeder.php** (Seeder)
- Populates the `items` table with 500 sample entries for testing purposes.
- Example data format: `Item 1`, `Item 2`, etc.

### 4. **Opportunities.php** (Livewire Component)
- Implements the core logic for pagination and "Items per page" functionality.
- Key Properties:
  - `$perPage`: Default items per page (20).
  - `$options`: Dropdown options ([20, 50, 100, 250]).
- Key Methods:
  - `updatingPerPage`: Resets pagination to the first page when "Items per page" changes.
  - `render`: Fetches paginated items.

### 5. **opportunities.blade.php** (Blade View)
- Displays the items and the pagination controls.
- Contains a dropdown to select "Items per page."

### 6. **web.php** (Routes)
- Defines a route to render the Livewire component at `/opportunities`.
 

## Usage Instructions

1. **Change "Items per page":**
   - Use the dropdown to select the desired number of items per page.
   - Available options: 20, 50, 100, 250.

2. **Navigate Pages:**
   - Use the pagination controls to navigate through the pages.

---

## Performance Considerations

1. **Efficient Data Handling:**
   - Uses Livewire's `paginate()` to fetch only the required items for the current page.

2. **Preventing N+1 Query Problems:**
   - Use eager loading (e.g., `with('relationship')`) if relationships are added in the future.

3. **Indexing:**
   - Index columns used in queries to improve database performance.

---

## Optional Extensions

1. **Search Functionality:**
   - Add a search input to filter items by name.

2. **Sorting:**
   - Implement sorting options (e.g., sort by name ascending or descending).

3. **Caching:**
   - Use caching to improve performance for larger datasets.
 
 
